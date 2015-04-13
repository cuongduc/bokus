@extends('app')

@section('title')
    Signup - Bokus
@endsection

@section('style')
    <link rel="stylesheet" href="{{ asset('/css/style/auth.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/style/form.css') }}"/>
@endsection


@section('content')
    <!-- Main -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 center-block">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ url('/auth/register') }}" method="post" id="signupform" class="account-form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <h3 class="account-form-title">Create new account</h3>
                        <!-- Form input -->

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="bokus-form-input" id="name" name="name" placeholder="Display name" required>
                            <div class="helper-text callout hide">
                                <span>Display name should only contain alphabet characters and numbers</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="bokus-form-input email-input" id="email" name="email" placeholder="Email" required>
                            <div class="helper-text callout hide">
                                <span>Email must be valid in order to activate your account</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="bokus-form-input" id="password" name="password" placeholder="Password" required>
                            <div class="helper-text callout hide">
                                <span>Password must be at least 6 characters length</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="passwordConfirmation">Password confirmation</label>
                            <input type="password" class="bokus-form-input" id="passwordConfirmation" name="passwordConfirmation" placeholder="Password confirmation">
                            <div class="helper-text callout hide">
                                <span>Password confirmation must match your password</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="bokus-btn bokus-btn-default btn-sp-orange" name="submit" id="submit">Create new account</button>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('/js/custom.js') }}"></script>
    <script src="{{ asset('/js/helper.js') }}"></script>

    <!-- Display helper texts -->
    <script>
        $(document).ready(function() {
            // Hide all helper text
            // $('.callout').hide();

            // Toggle helper text on focus on input elements
            $('input.bokus-form-input').focus(function() {
                $(this).next().fadeIn(300);
                $(this).next().removeClass('hide');
            });
            $('input.bokus-form-input').focusout(function() {
                $(this).next().fadeOut(300);
                $(this).next().addClass('hide');
            });
        });
    </script>
@endsection
