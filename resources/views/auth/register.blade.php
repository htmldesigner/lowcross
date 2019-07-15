@extends('layouts.index')

@section('content')
    <section class="main">
        <div class="container">
            <div class="main-box">
                <div class="main-box-head">
                    <h1 class="main-box-head-header">
                        {{ __('registration') }}
                    </h1>
                    <span class="main-box-head-header-description">
                        {{ __('Plese complete five steps to create an account') }}
                    </span>
                </div>
                <ul class="h-menu">
                    <li class="arrow_box active"><span>Step 1</span><br>login info</li>
                    <li class="arrow_box"><span>Step 2</span><br>contact info</li>
                    <li class="arrow_box"><span>Step 3</span><br>practice area</li>
                    <li class="arrow_box"><span>Step 4</span><br>more details</li>
                    <li class="arrow_box"><span>Step 5</span><br>submission</li>
                </ul>


                <form method="POST" action="{{ route('register') }}" id="Register-form">
                    @csrf

                <div class="main-box-content">
                    <div class="main-box-content-section">

                        <div class="clear">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Username:') }}</span>
                                @error('name')
                                <p>The username already taken<br>
                                    Please try another one.</p>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="name" type="text" class="input-txt form-control @error('name') is-invalid @enderror" name="name" value="{{ session()->get('name') }}" required autocomplete="name" autofocus>
                                <span class="field-comment">For security reasons we advise you to select a User Id which is a combination of both Upper/Lower case letters and /or digits</span>
                            </div>

                            <div class="col-sm-3 required active">
                                @error('name')
                                 <span>required</span>
                                @enderror
                            </div>
                        </div>

                        <div class="clear pt20">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Create Password:') }}</span>
                            </div>
                            <div class="col-sm-6">
                                <input id="password" type="password" class="input-txt form-control @error('password') is-invalid @enderror" name="password" value=" {{ session()->get('password') }} " required autocomplete="new-password">
                            </div>
                            <div class="col-sm-3 required active">
                                @error('password')
                                    <span>required</span>
                                @enderror
                            </div>
                        </div>

                        <div class="clear pt10">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Confirm Password') }}</span>
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="input-txt form-control" value="{{ session()->get('password_confirmation') }}" name="password_confirmation" required autocomplete="new-password">
                                <span class="field-comment">Minimum of 8 characters in length, include Latin letters and numbers</span>
                            </div>
                            <div class="col-sm-3 required">
                                {{--@error('password-confirm')--}}
                                    {{--<span>required</span>--}}
                                {{--@enderror--}}
                            </div>
                        </div>

                        <div class="clear pt20">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('E-Mail Address') }}</span>
                                @error('email')
                                <p>User Email already taken<br>
                                    Please try another one.</p>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <input id="email" type="email" class="input-txt form-control @error('email') is-invalid @enderror" name="email" value="{{ session()->get('email') }}" required autocomplete="email">
                                <span class="field-comment">Please make sure that you have entered a valid email address because a verification email will be sent to that address and if you do not have access to the email account you will not be able to complete the registration and you will not be able to login and use the LawCross website.<br><br>
                        <em>Note: For your policy neither your email won’t be misused nor provided to any third party</em></span>
                            </div>
                            <div class="col-sm-3 required active">
                                @error('email')
                                    <span>required</span>
                                @enderror
                            </div>
                        </div>

                        <div class="clear pt20">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6 stay-signed">
                                <input type="checkbox" name="stay-signed" checked>
                                <span>Stay signed in</span>
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>

                    </div>

                    <div class="main-box-content-section">

                        <div class="clear">
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6">
                                <h3 >Password Recovery Information</h3>
                                <span class="field-comment">If you ever forget your password we will prompt you with a hint to jog your memory.	Be sure to pick a hint that is meaningful to you, but won’t be obvious to others</span>

                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>

                        <div class="clear pt20">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Password Hint:') }}</span>
                            </div>
                            <div class="col-sm-6">
                                <input id="hint" type="text" class="input-txt form-control @error('hint') is-invalid @enderror" name="hint" value="{{ session()->get('hint') }}" required autocomplete="hint">
                                <span class="field-comment">If a hint doesn’t help you remember your password, we’ll allow you to reset if after you’ve answered a security question. Please select and answer one of the questions below to setup your security question.</span>
                            </div>
                            <div class="col-sm-3 required active">
                                @error('hint')
                                    <span>required</span>
                                @enderror
                            </div>
                        </div>

                        <div class="clear pt20">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Security Question:') }}</span>
                            </div>
                            <div class="col-sm-6">
                                <select id="security_question" class="input-txt form-control" name="security_question" value="{{ session()->get('security_question') }}">
                                    <option>What is your best friend’s name?</option>
                                    <option>What is your mother name?</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>

                        <div class="clear pt10">
                            <div class="col-sm-3 reg-title">
                                <span>Answer:</span>
                            </div>
                            <div class="col-sm-6">
                                <input id="secret_answer" type="text" class="input-txt form-control @error('secret_answer') is-invalid @enderror" name="secret_answer" value="{{ session()->get('secret_answer') }}" required autocomplete="secret_answer">
                            </div>
                            <div class="col-sm-3">
                                @error('secret_answer')
                                    <span>required</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="main-box-content-section">

                        <div class="clear">
                            <div class="col-sm-3 reg-title">
                                <span>How did you find us?</span>
                            </div>
                            <div class="col-sm-6">
                                <select class="input-txt" name="{{ session()->get('how-q') }}">
                                    <option value="1">Choose one</option>
                                    <option value="2">Choose two</option>
                                </select>
                            </div>
                            <div class="col-sm-3 required">
                                @error('how-q')
                                <span>required</span>
                                @enderror
                            </div>
                        </div>

                        <div class="clear pt10">

                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-6">
                                <input id="find_us" type="text" class="input-txt form-control @error('find_us') is-invalid @enderror" name="find_us" value="{{ session()->get('find_us') }}" required autocomplete="find_us" placeholder="Please cpecify">
                            </div>
                            <div class="col-sm-3">
                                @error('find_us')
                                    <span>required</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    {{--<div class="main-box-content-section">--}}
                        {{--<div class="clear pt20">--}}
                            {{--<div class="col-sm-3 reg-title">--}}
                                {{--<span>Word Verification:    </span>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-6">--}}
                                {{--<div class="col-sm-4">--}}
                                    {{--<div class="captcha">captcha</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-8">--}}
                                    {{--<span class="field-comment">Type the characters you see in the picture. </span>--}}
                                    {{--<div class="pt10">--}}
                                        {{--<input class="input-txt" type="text" name="captcha">--}}
                                    {{--</div>--}}
                                    {{--<span class="field-comment">Letters are not case sensitive</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-sm-3 required">--}}
                                {{--<span>required</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                    <div class="main-box-content-buttons" style="clear:both;">

                        <input type="submit" class="button button-next" value="Continue" name="confirm">
                        <input type="text" style="display: none" value="step_1" name="agree">

                    </div>

                </div>
              </form>
            </div>
    </section>
@endsection
