@extends('layouts.app')
@section('content')
<div class="container front-page">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="jumbotron front-red">
                    <img src="/images/logo.png" class="front-page-logo">
                  <br>
                  <p class="lead">Giving ambulance clinicians a helping hand when deciding which patients need TXA.</p>
                  <hr>
                  <h4>Interested in using the app?</h4>
                  <p class="lead">Download it from the Apple and Google Play Stores</p>
                  <div class="row">
                      <div class="col-md-6">
                            <a href="#" ><img src="/images/ios-app-store.svg" class="appstore" alt='Download from the Apple AppStore' /></a>
                      </div>
                      <div class="col-md-6">
                            <a href='#'><img class="appstore"  alt='Get it on Google Play' src='/images/google-play-badge.png'/></a>
                      </div>
                    </div>
                <br><br>
                <p class="lead">Contact <a href="mailto:batt@ambulanceresearch.co.uk">batt@ambulanceresearch.co.uk</a> to access this site.</p>
              </div>
        </div>
    </div>
</div>

@endsection
