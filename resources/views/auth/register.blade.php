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
                                @if($errors->has('name'))
                                    <p>{{$errors->first('name')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input id="name" type="text" class="input-txt form-control @error('name') is-invalid @enderror" name="name" value="{{ session()->get('name') ? session()->get('name') : old('name') }}" autocomplete="name" autofocus>
                                <span class="field-comment">For security reasons we advise you to select a User Id which is a combination of both Upper/Lower case letters and /or digits</span>
                            </div>

                            <div class="col-sm-3 required {{$errors->has('name')?"active":""}}">
                                 <span>required</span>
                            </div>
                        </div>
                        <div class="clear pt20">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Create Password:') }}</span>
                                @if($errors->has('password'))
                                    <p>{{$errors->first('password')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input id="password" type="password" class="input-txt form-control @error('password') is-invalid @enderror" name="password" value="{{ session()->get('password') ? session()->get('password') : old('password') }}" required autocomplete="new-password">
                            </div>
                            <div class="col-sm-3 required {{$errors->has('password')?"active":""}}">
                                    <span>required</span>
                            </div>
                        </div>

                        <div class="clear pt10">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Confirm Password') }}</span>
                            </div>
                            <div class="col-sm-6">
                                <input id="password-confirm" type="password" class="input-txt form-control" value="{{ session()->get('password_confirmation') ? session()->get('password_confirmation') : old('password_confirmation') }}" name="password_confirmation" required autocomplete="new-password">
                                <span class="field-comment">Minimum of 8 characters in length, include Latin letters and numbers</span>
                            </div>
                            <div class="col-sm-3 required {{$errors->has('password_confirmation')?"active":""}}">
                                    <span>required</span>
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
                                <input id="email" type="email" class="input-txt form-control @error('email') is-invalid @enderror" name="email" value="{{session()->get('email') ?  session()->get('email') : old('email')}}" required autocomplete="email">
                                <span class="field-comment">Please make sure that you have entered a valid email address because a verification email will be sent to that address and if you do not have access to the email account you will not be able to complete the registration and you will not be able to login and use the LawCross website.<br><br>
                        <em>Note: For your policy neither your email won’t be misused nor provided to any third party</em></span>
                            </div>
                            <div class="col-sm-3 required {{$errors->has('email')?"active":""}}">
                                <span>required</span>
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
                                @if($errors->has('hint'))
                                    <p>{{$errors->first('hint')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input id="hint" type="text" class="input-txt form-control @error('hint') is-invalid @enderror" name="hint" value="{{ session()->get('hint') ?  session()->get('hint') : old('hint') }}" required autocomplete="hint">
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
                                @if($errors->has('security_question'))
                                    <p>{{$errors->first('security_question')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <select class="input-txt" name="security_question">
                                    <option value="">Select</option>
                                    <option value="What is your best friend’s name?" @if (session()->get('security_question') == "What is your best friend’s name?") {{ 'selected' }} @endif>What is your best friend’s name?</option>
                                    <option value="What is your mother name?" @if (session()->get('security_question') == "What is your mother name?") {{ 'selected' }} @endif>What is your mother name?</option>

                                </select>

                            </div>
                            <div class="col-sm-3 required active">
                                @error('security_question')
                                <span>required</span>
                                @enderror
                            </div>
                        </div>

                        <div class="clear pt10">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('Answer:') }}</span>
                                @if($errors->has('secret_answer'))
                                    <p>{{$errors->first('secret_answer')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input id="secret_answer" type="text" class="input-txt form-control @error('secret_answer') is-invalid @enderror" name="secret_answer" value="{{ session()->get('secret_answer') ? session()->get('secret_answer') : old('secret_answer') }}" required autocomplete="secret_answer">
                            </div>
                            <div class="col-sm-3 required active">
                                @error('secret_answer')
                                    <span>required</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="main-box-content-section">

                        <div class="clear">
                            <div class="col-sm-3 reg-title">
                                <span>{{ __('How did you find us?') }}</span>
                                @if($errors->has('how_did_you_find_us'))
                                    <p>{{$errors->first('how_did_you_find_us')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <select class="input-txt" name="how_did_you_find_us">
                                    <option value="">Select</option>
        <option value="Internet" {{old('Internet') }}>Internet</option>
        <option value="Friends" {{  old('Friends') }}>Friends</option>
        <option value="Other" {{ old('Other') }}>Other</option>
                                </select>
                            </div>
                            <div class="col-sm-3 required {{$errors->has('how_did_you_find_us')?"active":""}}">
                                <span>required</span>
                            </div>
                        </div>

                        <div class="clear pt10">
                            <div class="col-sm-3 reg-title">
                                @if($errors->has('find_us'))
                                    <p>{{$errors->first('find_us')}}</p>
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <input id="find_us" type="text" class="input-txt form-control @error('find_us') is-invalid @enderror" name="find_us" value="{{ session()->get('find_us') ? session()->get('find_us') : old('find_us') }}" required autocomplete="find_us" placeholder="Please cpecify">
                            </div>
                            <div class="col-sm-3 required active">
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
