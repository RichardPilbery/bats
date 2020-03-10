@extends('layouts.app')


@section('content')

<div class="container">
    <h1>Edit criteria for BATS</h1>

        <div class="row">
            <div class="col-md-12">
                <div class="card text-black">
                    <div class="card-body">
                            <p>Use the left-hand side of this form to enter the inclusion and exclusion criteria for the study. You'll need to use markdown in order for the content to render correctly on the mobile app.</p>
                            <p>Don't forget to click the submit button at the bottom of the page.</p>

                        <form method="POST" action="/criteria/{{$criteria->id}}">

                            @csrf
                            @method('PATCH')

                            <input type="hidden" name="user_id" value="{{$criteria->user_id}}">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label {{ $errors->has('version') ? 'class=is-invalid' : '' }} for="version">Version details
                                        </label>
                                        <br><br><br><br>
                                        <textarea rows="1" v-model="version" class="form-control {{ $errors->has('version') ? 'is-invalid' : '' }}" name="version" id="version" aria-describedby="version" placeholder="Enter version info" >{{ old('version', $criteria->version) }}</textarea>
                                        @if($errors->has('version'))
                                            <div class="invalid-feedback">
                                                Please enter version info
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Rendered content</p>
                                    <div class="card border-info">
                                            <div class="card-header bg-success text-white">
                                                    Version info
                                                </div>
                                        <div class="card-body">
                                            <vue-showdown :markdown="version"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr/>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label {{ $errors->has('inclusion') ? 'class=is-invalid' : '' }} for="inclusion">Inclusion criteria
                                        </label>
                                        <textarea rows="10" v-model="inclusion" class="form-control {{ $errors->has('inclusion') ? 'is-invalid' : '' }}" name="inclusion" id="inclusion" aria-describedby="inclusion" placeholder="Enter inclusion criteria" >{{ old('inclusion', $criteria->inclusion) }}</textarea>
                                        @if($errors->has('inclusion'))
                                            <div class="invalid-feedback">
                                                Please enter the inclusion criteria
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Rendered content</p>
                                    <div class="card border-info">
                                            <div class="card-header bg-success text-white">
                                                    Inclusion Criteria
                                                </div>
                                        <div class="card-body">
                                            <vue-showdown :markdown="inclusion"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <label for="exclusion">Exclusion criteria
                                            </label>
                                        <textarea rows="10" v-model="exclusion" class="form-control  {{ $errors->has('exclusion') ? 'is-invalid' : '' }}" name="exclusion" id="exclusion" aria-describedby="exclusion">{{ old('exclusion', $criteria->exclusion) }}</textarea>
                                        @if($errors->has('exclusion'))
                                            <div class="invalid-feedback">
                                                Please enter the exclusion criteria
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p>Rendered content</p>
                                    <div class="card border-dark">
                                            <div class="card-header bg-danger text-white">
                                                    Exclusion Criteria
                                                </div>
                                        <div class="card-body">
                                            <vue-showdown :markdown="exclusion"/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit Criteria</button>


                        </form>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>



</div>


@endsection
