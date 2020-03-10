<?php

namespace App\Http\Controllers;

use App\Criteria;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CriteriaController extends Controller
{
    public function __construct() {

        $this->middleware('auth', ['except' => 'apicall']);
        //$this->authorizeResource(Criteria::class, 'criteria');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd($study);

        $criteria = Criteria::first();
        $user = User::where('id', $criteria->user_id)->first();
        
        return view('criteria.index', compact(['criteria', 'user']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('criteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'version' => 'required',
            'inclusion' => 'required',
            'exclusion' => 'required'
        ]);

        // Add current user id to record (to blame)
        $request->user_id = \Auth::user()->id;

        Criteria::create(request(['version','inclusion','exclusion','user_id']));
        return redirect('/home')->with('status', 'Criteria added');
    }

    public function edit(Criteria $criteria)
    {
    
        //$criteria = Criteria::first();
        //dd($criteria);

        return view('criteria.edit', compact('criteria'));

    }


    public function update(Request $request, Criteria $criteria)
    {
        $request->validate([
            'version' => 'required',
            'inclusion' => 'required',
            'exclusion' => 'required'
        ]);

        $request->user_id = \Auth::user()->id;

        //dd($request->all());

        $criteria->update(request(['version','inclusion','exclusion','user_id']));
        return redirect('/home')->with('status', 'Criteria updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Criteria  $criteria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criteria $criteria)
    {
        //
    }

    public function apicall(Request $request) {

        // Log::debug("Recieved request with code: ".$request->code);

        if(isset($request->code)) {
            $sc = config('app.secretcode');

            if($request->code == $sc) {
                $criteria = Criteria::first();

                return response()->json($criteria);

            }
            else {
                return response()->json(null);
            }
        }
    }
}
