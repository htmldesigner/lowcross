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
                                    <select class="input-txt" name="prefix">
                                        <option value="">Select</option>
                                        <option value="Mr." @if (session()->get('prefix') == "Mr.") {{ 'selected' }} @endif>Mr.</option>
                                        <option value="Mrs." @if (session()->get('prefix') == "Mrs.") {{ 'selected' }} @endif>Mrs.</option>
                                        <option value="Ms." @if (session()->get('prefix') == "Ms.") {{ 'selected' }} @endif>Ms.</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('prefix')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>{{ __('First Name:')}} </span>
                            @if($errors->has('first_name'))
                                <p>{{$errors->first('first_name')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                         <input class="input-txt" type="text" name="first_name" value="{{session()->get('first_name') ? session()->get('first_name') : old('first_name')}}" required>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('first_name')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>{{ __('Last Name:')}}</span>
                            @if($errors->has('last_name'))
                                <p>{{$errors->first('last_name')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="last_name" value="{{session()->get('last_name') ? session()->get('last_name') : old('last_name')}}" required>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('last_name')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>{{ __('Middle Name:')}}</span>
                            @if($errors->has('middle_name'))
                                <p>{{$errors->first('middle_name')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="middle_name" value="{{session()->get('middle_name') ? session()->get('middle_name') : old('middle_name')}}" required>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('middle_name')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span style="line-height:110%;">{{ __('Attorney Registration Number:')}}</span>
                            @if($errors->has('registration_number'))
                                <p>{{$errors->first('registration_number')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="registration_number" value="{{session()->get('registration_number') ? session()->get('registration_number') : old('registration_number')}}" required>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('registration_number')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                </div>
                <div class="main-box-content-section">
                    <div class="clear pt20">
                        <div class="col-sm-3 reg-title">
                            <span>{{ __('Law Firm Name:')}}</span>
                            @if($errors->has('law_firm_name'))
                                <p>{{$errors->first('law_firm_name')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="law_firm_name" value="{{session()->get('law_firm_name') ? session()->get('law_firm_name') : old('law_firm_name')}}" required>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('law_firm_name')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Country:</span>
                        </div>
                        <div class="col-sm-6">
                            <select class="input-txt" name="country">
                                <option value="">Select Your Country (by default United States)</option>
                                <option value="UK" @if (session()->get('country') == "UK") {{ 'selected' }} @endif>UK</option>
                                <option value="Brasil" @if (session()->get('country') == "Brasil") {{ 'selected' }} @endif>Brasil</option>
                            </select>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('country')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>{{ __('Main Address:')}}</span>
                            @if($errors->has('street_name'))
                                <p>{{$errors->first('street_name')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="street_name" value="{{session()->get('street_name') ? session()->get('street_name') : old('street_name')}}" placeholder="Street name">
                        </div>
                        <div class="col-sm-3 required {{$errors->has('street_name')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span></span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-5">
                                    <input class="input-txt" type="text" name="suite" value="{{session()->get('suite') ? session()->get('suite') : old('suite')}}" placeholder="Suite #">
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
                            <input class="input-txt" type="text" name="city" value="{{session()->get('city') ? session()->get('city') : old('city')}}" placeholder="City">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span></span>
                        </div>
                        <div class="col-sm-6">
                            <select class="input-txt" name="states">
                                <option value="0">State drop down menu if US or Canada</option>
                                <option value="Alabama" @if (session()->get('states') == "Alabama") {{ 'selected' }} @endif>Alabama</option>
                                <option value="Alaska" @if (session()->get('states') == "Alaska") {{ 'selected' }} @endif>Alaska</option>
                                <option value="Arizona" @if (session()->get('states') == "Arizona") {{ 'selected' }} @endif>Arizona</option>
                                <option value="Arkansas" @if (session()->get('states') == "Arkansas") {{ 'selected' }} @endif>Arkansas</option>
                                <option value="California" @if (session()->get('states') == "California") {{ 'selected' }} @endif>California</option>
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
                            <input class="input-txt" type="text" name="province" value="{{session()->get('province') ? session()->get('province') : old('province')}}" placeholder="Province for other countries">
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
                                    <input class="input-txt" type="text" name="zip_code" value="{{session()->get('zip_code') ? session()->get('zip_code') : old('zip_code')}}" placeholder="Zip Code/Postal Code">
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
                            @if($errors->has('phone.*'))
                                <p>{{$errors->first('phone.*')}}</p>
                            @endif
                        </div>

                        <div class="col-sm-6">
                            <div class="row">
                                <?php $phone = session()->get('phone');?>
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                  <input class="input-txt" type="text" required name="phone[]" value="{{ $phone[0] }}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                    <input class="input-txt" type="text" required name="phone[]" value="{{ $phone[1] }}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6">
                                    <input class="input-txt" type="text" required name="phone[]" value="{{ $phone[2] }}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required {{$errors->has('phone.*')?"active":""}}">
                            <span>required</span>
                        </div>
                    </div>

                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Fax:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <?php $fax = session()->get('fax');?>
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="fax[]" value="{{$fax[0]}}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="fax[]" value="{{$fax[1]}}" placeholder="" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-sm-6 col-xs-6">
                                    <input class="input-txt" type="text" name="fax[]" value="{{$fax[2]}}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>{{ __('Mobile:')}} </span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <?php $mobile = session()->get('mobile');?>
                                <div class="col-sm-2 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="mobile[]" value="{{$mobile[0]}}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2 col-xs-3 pr0">
                                    <input class="input-txt" type="text" name="mobile[]" value="{{ $mobile[1]}}" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8 col-xs-6">
                                    <input class="input-txt" type="text" name="mobile[]" value="{{$mobile[2]}}" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Website:</span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="website" value="{{session()->get('website') ? session()->get('website') : old('website')}}" placeholder="http://">
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span style="line-height:110%;">{{ __('Primary Administrative Contact:')}}</span>
                            @if($errors->has('primary_contact'))
                                <p>{{$errors->first('primary_contact')}}</p>
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" type="text" name="primary_contact" value="{{session()->get('primary_contact') ? session()->get('primary_contact') : old('primary_contact')}}" placeholder="">
                        </div>
                        <div class="col-sm-3 required {{$errors->has('primary_contact')?"active":""}}">
                            <span>required</span>
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
                            <textarea class="profile-area" type="text" name="description_profile" placeholder=""></textarea>
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
