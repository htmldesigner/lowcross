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
                <li class="arrow_box"><span>Step 1</span><br>login info</li>
                <li class="arrow_box"><span>Step 2</span><br>contact info</li>
                <li class="arrow_box"><span>Step 3</span><br>practice area</li>
                <li class="arrow_box"><span>Step 4</span><br>more details</li>
                <li class="arrow_box active"><span>Step 5</span><br>submission</li>
            </ul>

            <form method="POST" action="{{ route('submission') }}">
                @csrf

            <div class="main-box-content">

                <div class="main-box-content-section">
                    <div class="clear">
                        <div class="row">
                            <div class="col-sm-3 reg-title">
                                <span>Terms of Service:</span>
                            </div>
                            <div class="col-sm-6">
                                <h4 class="check">Please check the account information you’re entered and review the Terms of Service below. </h4>
                            </div>
                            <div class="col-sm-3 required">
                                <span>required</span>
                            </div>
                        </div>
                    </div>
                    <div class="clear">
                        <div class="row">
                            <div class="col-sm-3">

                            </div>
                            <div class="col-sm-6">
                                <p class="printable"><a href="">Printable Version</a></p>
                                <iframe style="width:100%;height:400px;border:1px solid #abe;box-shadow:none;" src="agreement.html"></iframe>
                                <p class="accept">By clicking on ‘I accept’ below you are agreeing to the <a href="">Terms of Service</a> above and the <a href="">Privacy Policy</a>.</p>
                                <div style="text-align:center;">
                                    <a href="#" class="button button-accept">I accept. Create my account</a>
                                </div>
                            </div>
                            <div class="col-sm-3">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-box-content-buttons" style="clear:both;">

                        <a href="{{ route('details') }}" class="button button-prev">Go back</a>
                        <input type="submit" class="button button-next" value="Continue" name="confirm">
                        <input type="text" style="display: none" value="step_5" name="agree">
                </div>
            </div>
        </form>

        </div>
    </div>
</section>
@endsection
