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
                <li class="arrow_box active"><span>Step 2</span><br>contact info</li>
                <li class="arrow_box"><span>Step 3</span><br>practice area</li>
                <li class="arrow_box"><span>Step 4</span><br>more details</li>
                <li class="arrow_box"><span>Step 5</span><br>submission</li>
            </ul>

            <form method="POST" action="{{ route('contact') }}">
                @csrf
            <div class="main-box-content">

                <div class="main-box-content-section">
                    <div class="clear">
                        <div class="col-sm-3 reg-title">
                            <span>Prefix: </span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <select class="input-txt" name="prefix" required>
                                        <option value="Mr." @if (session()->get('prefix') == "Mr.") {{ 'selected' }} @endif>Mr.</option>
                                        <option value="Mrs." @if (session()->get('prefix') == "Mrs.") {{ 'selected' }} @endif>Mrs.</option>
                                        <option value="Ms." @if (session()->get('prefix') == "Ms.") {{ 'selected' }} @endif>Ms.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('prefix')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>First Name: </span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="first_name" value="{{ session()->get('first_name') }}" required>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('first_name')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Last Name: </span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="last_name" value="{{ session()->get('last_name') }}" required>
                        </div>
                        <div class="col-sm-3 required  active">
                            @error('last_name')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Middle Name:  </span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="middle_name" value="{{ session()->get('middle_name') }}" required>
                        </div>
                        <div class="col-sm-3 required  active">
                            @error('middle_name')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span style="line-height:110%;">Attorney Registration Number:</span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="registration_number" value="{{ session()->get('registration_number') }}" required>
                        </div>
                        <div class="col-sm-3 required  active">
                            @error('registration_number')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="main-box-content-section">
                    <div class="clear pt20">
                        <div class="col-sm-3 reg-title">
                            <span>Law Firm Name:</span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="organization_name" value="{{ session()->get('organization_name') }}" required>
                        </div>
                        <div class="col-sm-3 required  active">
                            @error('organization_name')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Country:</span>
                        </div>
                        <div class="col-sm-6">
                            <select class="input-txt" name="country" value="{{ session()->get('country') }}">
                                <option value="">Select Your Country (by default United States)</option>
                                <option value="2">UK</option>
                                <option value="2">Brasil</option>
                            </select>
                        </div>
                        <div class="col-sm-3 required  active">
                            @error('country')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Main Address:</span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="street_name" value="{{ session()->get('street_name') }}" placeholder="Street name">
                        </div>
                        <div class="col-sm-3 required  active">
                            @error('street_name')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span></span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <input class="input-txt" type="text" name="suite" value="{{ session()->get('street_name') }}" placeholder="Suite #">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span></span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="city" value="{{ session()->get('city') }}" placeholder="City">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span></span>
                        </div>
                        <div class="col-sm-6">
                            <select class="input-txt" name="states" value="{{ session()->get('states') }}">
                                <option value="1">State drop down menu if US or Canada</option>
                                <option value="2">Alabama</option>
                                <option value="3">Alaska</option>
                                <option value="4">Arizona</option>
                                <option value="5">Arkansas</option>
                                <option value="6">California</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span></span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="province" value="{{ session()->get('province') }}" placeholder="Province for other countries">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="input-txt" type="text" name="zip_code" value="{{ session()->get('zip_code') }}" placeholder="Zip Code/Postal Code">
                                </div>
                                <div class="col-sm-6" style="text-align:right;">
                                    <button class="add-adr">+Add address</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt20">
                        <div class="col-sm-3 reg-title">
                            <span>Phone:</span>
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="phone_int" value="{{ session()->get('phone_int') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="phone_pref" value="{{ session()->get('phone_pref') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6">
                                    <input class="input-txt" type="text" name="phone_num" value="{{ session()->get('phone_num') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required  active">
                            @error('phone_num')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>

                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Fax:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="fax_int" value="{{ session()->get('fax_int') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="fax_pref" value="{{ session()->get('fax_pref') }}" placeholder="" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6">
                                    <input class="input-txt" type="text" name="fax_num" value="{{ session()->get('fax_num') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Mobile: </span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-2 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="mobile_int" value="{{ session()->get('mobile_int') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="mobile_pref" value="{{ session()->get('mobile_pref') }}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-xs-6">
                                    <input class="input-txt" type="text" name="mobile_num" value="{{ session()->get('mobile_num') }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Website:</span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="website" value="{{ session()->get('website') }}" placeholder="http://">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span style="line-height:110%;">Primary Administrative Contact:</span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="primary_contact" value="{{ session()->get('primary_contact') }}" placeholder="">
                        </div>
                        <div class="col-sm-3 required">
                            @error('primary contact')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Profile:</span>
                            <div class="addition-txt">
                                500 characters left<br>
                                <span>Maximum 500 characters</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <textarea class="profile-area" type="text" name="description_profile" required placeholder=""></textarea>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                </div>

                <div class="main-box-content-buttons" style="clear:both;">
                    <a href="{{ route('register') }}" class="button button-prev">Go back</a>
                    <input type="submit" class="button button-next" value="Continue" name="confirm">
                    <input type="text" style="display: none" value="step_2" name="agree">
                </div>
            </div>

            </form>
        </div>
    </div>
</section>
@endsection
