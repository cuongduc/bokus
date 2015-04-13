@extends('app')

@section('title')
    Login - Bokus
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/style/auth.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/style/form.css') }}"/>
@endsection

@section('content')
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 center-block">
                <form action="{{ url('/auth/login') }}" method="post" role="form" id="loginform" class="account-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <h3 class="account-form-title">Welcome back! Sign in</h3>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="bokus-form-input email-input" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="bokus-form-input" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <a href="#" class="pull-right">Forgot password?</a>
                            <div class="checkbox">
                                <label for="remember">
                                    <input type="checkbox" name="remember" type="checkbox" value="Remember me">
                                    Remember me
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="bokus-btn bokus-btn-default btn-sp-orange" name="submit" id="submit">Sign in</button>
                            <span class="label-separator">OR</span>
                            <a href="#" class="pull-right" id="registerAccount">Register for an account</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
@endsection
