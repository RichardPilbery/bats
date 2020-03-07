@extends('layouts.app')
@section('content')
<div class="container front-page">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="jumbotron front-red">
                    <img src="/images/logo.png" >
                  <h1 class="display-4 center text-center">Bleeding Audit Trauma Score</h1>
                  <br>
                  <p class="lead">Getting the right patients TXA in a timely fashion.</p>
                  <hr>
                  <h4>Interested in using the app?</h4>
                  <p class="lead">Download it from the Apple and Google Play Stores</p>
                  <div class="row">
                      <div class="col-md-6">
                            <a href="#" src="/images/ios-app-store.svg" ></a>
                      </div>
                      <div class="col-md-6">
                            <a href='https://play.google.com/store/apps/details?id=uk.ambulanceresearch.asra&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img class="appstore"  alt='Get it on Google Play' src='/images/google-play-badge.png'/></a>
                      </div>
                    </div>
                <br><br>
                <p class="lead">Contact <a href="mailto:bats@ambulanceresearch.co.uk">bats@ambulanceresearch.co.uk</a> to access this site.</p>
              </div>
        </div>
    </div>
</div>

@endsection
