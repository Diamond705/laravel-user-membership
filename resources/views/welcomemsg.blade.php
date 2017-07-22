@extends('layouts.master')

@section('content')

    <div class="container">

        <div class="row">
            <!--begin section_box -->
            <div class="text-center">
                @if($provider == 'facebook')
                    <div class="section_title text-center">
                        <img src="{{ $details->user['avatar'] }}"
                             style="width:150px; height:150px; border-radius:50%;">
                        <h2>Welcome {{ $details->user['name']}} ! <br> Your email is : {{
    $details->user['email'] }}.</h2>
                    </div>

                @elseif($provider == 'google')
                    <div class="section_title text-center">
                        <img src="{{ $details->user['avatar'] }}"
                             style="width:150px; height:150px; border-radius:50%;">
                        <h2>Welcome {{ $details->user['name']}} ! <br> Your email is : {{
    $details->user['email'] }}.</h2>
                    </div>

                @elseif($provider == 'twitter')
                    <div class="section_title text-center">
                        <img src="{{ $details->user['avatar'] }}"
                             style="width:150px; height:150px; border-radius:50%;">
                        <h2>Welcome {{ $details->user['name']}} ! <br> Your email is : {{
    $details->user['email'] }}.</h2>
                    </div>

                @elseif($provider == 'github')
                    <div class="section_title text-center">
                        <img src="{{ $details->user['avatar'] }}"
                             style="width:150px; height:150px; border-radius:50%;">
                        <h2>Welcome {{ $details->user['name']}} ! <br> Your email is : {{
    $details->user['email'] }}.</h2>
                    </div>

                @else

                    <div class="section_title text-center">
                        <h2>You are now logged in!</h2>
                    </div>
                @endif


            </div>
            <!--end section_box -->

        </div>

    </div>

@endsection