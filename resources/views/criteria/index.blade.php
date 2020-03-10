@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Criteria for BATS</h1>
        </div>
        <div class="col-md-4 ">
            @if(!is_null($criteria))
                <a class="btn btn-primary float-right" href="/criteria/{{$criteria->id}}/edit" role="button">Edit Criteria</a>
            @endif
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif


    @if(!is_null($criteria))

        <div class="row">
            <div class="col-md-12">
                <h2>{{$criteria->version}}</h2>
                <br>
                <div class="card border-info">
                    <div class="card-header bg-success text-white">
                        Inclusion Criteria
                    </div>
                    <div class="card-body">
                            <div><vue-showdown markdown='{{$criteria->inclusion}}'></div>
                        </div>
                </div>
                <br>
                <div class="card border-dark">
                    <div class="card-header bg-danger text-white">
                        Exclusion Criteria
                    </div>
                    <div class="card-body">
                        <div><vue-showdown markdown='{{$criteria->exclusion}}'></div>
                    </div>
                </div>
                <br>
                <p>This was last updated by {{$user->name}} on {{$criteria->updated_at}}</p>
            </div>

    @else

        <div class="row">
            <div class="col-md-8">
                <div class="card text-black">
                    <div class="card-body">
                        <h5 class="card-title">You have not speficied the inclusion/exclusion criteria for this study</h5>
                        <p class="card-text">Why not enter them now by clicking on the button:</p>
                        <a class="btn btn-primary hollow float-right btn-lg" href="/criteria/{{$study->id}}/create" role="button">Add study criteria for {{$study->title}}</a>
                    </div>
                </div>
            </div>
        </div>



    @endif


</div>

@endsection
