@extends('layouts.master')

@section('welcome-section')
    <div class="row showcase text-center">

        <div>
            @if (Auth::guest())

                <div class="wow bounceInDown">
                    <h2>User Membership by <a href="http://github.com/Diamond705">@Diamond705</a></h2>
                    <h3><span class="rotate">A User membership script built with Laravel</span></h3>
                    <a type="button" class="btn btn-theme-outline" href="{{ route('login') }}"> Login</a>&nbsp;&nbsp;&nbsp;
                    <!--<button type="button" class="btn btn-theme-outline">Login</button>-->
                    <a type="button" class="btn btn-theme" href="{{ route('register') }}"> Register</a>
                    <!--<button type="button" class="btn btn-theme">Register</button>-->
                </div>

            @else

                <div class="wow bounceInDown">
                    <h2>User Membership by <a href="http://github.com/Diamond705">@Diamond705</a></h2>
                    <h3><span class="rotate">Welcome, {{ Auth::user()->name }} </span></h3>
                    <a type="button" class="btn btn-theme-outline" href="/logout"> Logout</a>
                    <!--<button type="button" class="btn btn-theme-outline">Login</button>-->
                </div>

            @endif

        </div>


    </div>

@endsection

@section('content')


        <div class="row">
            <!--begin section_box -->
            <div class="text-center">
                <img src="/images/{{ $user->avatar }}" style="height: 150px; width: 150px; border-radius: 50%" alt="">
                <hr>
                    <div class="section_title text-center">
                        <h2>You are now logged in!</h2>
                    </div>
                <form enctype="multipart/form-data" action="/welcome" method="post">
                    {{--<input class="input-file col-md-offset-5" id="file" data-multiple-caption="{count} files selected" multiple type="file" name="avatar" required><br>--}}
                    <div class="box">
                        <input type="file" name="avatar" id="file-1" class="inputfile inputfile-1 hid-input" data-multiple-caption="{count} files selected" multiple required/>
                        <label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Choose a file&hellip;</span></label>
                    </div>
                    <br>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-theme" value="Change Avatar">
                </form>
                {{--<p><a type="button" class="btn btn-theme" href="">Change Avatar</a></p>--}}



            </div>
            <!--end section_box -->

        </div>


@endsection