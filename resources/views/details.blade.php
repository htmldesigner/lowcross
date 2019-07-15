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
                <li class="arrow_box active"><span>Step 4</span><br>more details</li>
                <li class="arrow_box"><span>Step 5</span><br>submission</li>
            </ul>

            <form method="POST" action="{{ route('details') }}">
                @csrf

            <div class="main-box-content">

                <div class="main-box-content-section">
                    <div class="clear">
                        <div class="col-sm-3 reg-title">
                            <span>Law School Name: </span>
                        </div>
                        <div class="col-sm-6">
                            <input class="input-txt" name="school_name" value="{{session()->get('school_name')}}" type="text"  required>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('school_name')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>

                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Date Graduated: </span>
                        </div>
                        <div class="col-sm-6" style="overflow:hidden;">
                            <div class="row">
                                <div class="col-sm-6 col-xs-4 pad0">
                                    <select class="input-txt" name="month">
                                        <option value="">Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-4 pad0">
                                    <select class="input-txt" name="date">
                                        <option value="">Date</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-4 pad0">
                                    <select class="input-txt" name="year">
                                        <option value="">Year</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('year')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Gender:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="input-txt" name="gender" class="form-control" id="gender">
                                        <option value="">Select</option>
                                        <option value="Male" @if (session()->get('gender') == "Male") {{ 'selected' }} @endif>Male</option>
                                        <option value="Female" @if (session()->get('gender') == "Female") {{ 'selected' }} @endif>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('gender')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span style="line-height:110%;">Language (spoken/written):</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="input-txt" name="first_language">
                                        <option value="">Select first language</option>
                                        <option value="English" @if (session()->get('first_language') == "English") {{ 'selected' }} @endif>English</option>
                                        <option value="Russian" @if (session()->get('first_language') == "Russian") {{ 'selected' }} @endif>Russian</option>
                                        <option value="Deutsch" @if (session()->get('first_language') == "Deutsch") {{ 'selected' }} @endif>Deutsch</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('first_language')
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
                                <div class="col-sm-6">
                                    <select class="input-txt" name="second_language">
                                        <option value="">Select second language</option>
                                        <option value="English" @if (session()->get('second_language') == "English") {{ 'selected' }} @endif>English</option>
                                        <option value="Russian" @if (session()->get('second_language') == "Russian") {{ 'selected' }} @endif>Russian</option>
                                        <option value="Deutsch" @if (session()->get('second_language') == "Deutsch") {{ 'selected' }} @endif>Deutsch</option>
                                    </select>
                                </div>
                                <div class="col-sm-6" style="text-align:right;">
                                    <button class="add-adr">+Add language</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('second_language')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="main-box-content-section">
                    <div class="clear">
                        <div class="col-sm-3 reg-title">
                        </div>
                        <div class="col-sm-6">
                            <h3>Admitted to practice in ______ State_____</h3>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Date Admitted: </span>
                        </div>
                        <div class="col-sm-6" style="overflow:hidden;">
                            <div class="row">
                                <div class="col-sm-6 col-xs-4 pad0">
                                    <select class="input-txt" name="admitted_month">
                                        <option value="">Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-4 pad0">
                                    <select class="input-txt" name="admitted_date">
                                        <option value="">Date</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-4 pad0">
                                    <select class="input-txt" name="admitted_year">
                                        <option value="">Year</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('admitted_year')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>

                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Supreme Court:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="input-txt" name="supreme_court">
                                        <option value="">Select</option>
                                        <option value="Select1" @if (session()->get('supreme_court') == "Select1") {{ 'selected' }} @endif>Select1</option>
                                        <option value="Select2" @if (session()->get('supreme_court') == "Select2") {{ 'selected' }} @endif>Select2</option>
                                        <option value="Select3" @if (session()->get('supreme_court') == "Select3") {{ 'selected' }} @endif>Select3</option>
                                        <option value="Select4" @if (session()->get('supreme_court') == "Select4") {{ 'selected' }} @endif>Select4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('supreme_court')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>

                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Registration  Number:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="input-txt" type="text" name="reg_number" value="{{session()->get('reg_number')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Registration Date:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="input-txt" type="text" name="reg_date" value="{{session()->get('reg_date')}}" >
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>



                    <div class="clear pt20">
                        <div class="col-sm-3 reg-title">
                        </div>
                        <div class="col-sm-6">
                            <h3>Other states in wich you are admitted to practice</h3>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Date Admitted: </span>
                        </div>
                        <div class="col-sm-6" style="overflow:hidden;">
                            <div class="row">
                                <div class="col-sm-6 col-xs-4 pad0">
                                    <select class="input-txt" name="other_admitted_month">
                                        <option value="">Month</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-4 pad0">
                                    <select class="input-txt" name="other_admitted_date">
                                        <option value="">Date</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                    </select>
                                </div>
                                <div class="col-sm-3 col-xs-4 pad0">
                                    <select class="input-txt" name="other_admitted_year">
                                        <option value="">Year</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('other_admitted_year')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>

                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Supreme Court:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <select class="input-txt" name="other_supreme_court">
                                        <option value="">Select</option>
                                        <option value="Select1" @if (session()->get('other_supreme_court') == "Select1") {{ 'selected' }} @endif>Select1</option>
                                        <option value="Select2" @if (session()->get('other_supreme_court') == "Select2") {{ 'selected' }} @endif>Select2</option>
                                        <option value="Select3" @if (session()->get('other_supreme_court') == "Select3") {{ 'selected' }} @endif>Select3</option>
                                        <option value="Select4" @if (session()->get('other_supreme_court') == "Select4") {{ 'selected' }} @endif>Select4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 required active">
                            @error('other_supreme_court')
                            <span>required</span>
                            @enderror
                        </div>
                    </div>

                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Registration Number:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="input-txt" type="text" name="other_reg_number" value="{{session()->get('other_reg_number')}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                    <div class="clear pt10">
                        <div class="col-sm-3 reg-title">
                            <span>Registration Date:</span>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="input-txt" type="text" name="other_reg_date" value="{{session()->get('other_reg_date')}}" required>
                                </div>
                                <div class="col-sm-6" style="text-align:right;">
                                    <button class="add-adr">+Add state</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                        </div>
                    </div>
                </div>


                {{--<div class="main-box-content-section">--}}
                    {{--<div class="clear pt10">--}}
                        {{--<div class="col-sm-3 reg-title">--}}
                            {{--<span>Type of Practice:   </span>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-6">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="chose"><label>--}}
                                            {{--<input type="checkbox" name="" >--}}
                                            {{--<span>Solo</span></label>--}}
                                    {{--</div>--}}
                                    {{--<div class="chose"><label>--}}
                                            {{--<input type="checkbox" name="" >--}}
                                            {{--<span>Law Firm </span></label>--}}
                                    {{--</div>--}}
                                    {{--<div class="chose"><label>--}}
                                            {{--<input type="checkbox" name="" >--}}
                                            {{--<span>In-house Counsel</span></label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-sm-6">--}}
                                    {{--<div class="chose"><label>--}}
                                            {{--<input type="checkbox" name="" >--}}
                                            {{--<span>Government</span></label>--}}
                                    {{--</div>--}}
                                    {{--<div class="chose"><label>--}}
                                            {{--<input type="checkbox" name="" >--}}
                                            {{--<span>Judicial</span></label>--}}
                                    {{--</div>--}}
                                    {{--<div class="chose"><label>--}}
                                            {{--<input type="checkbox" name="" >--}}
                                            {{--<span>Other</span></label>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-3 required">--}}
                            {{--<span>required</span>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="main-box-content-buttons" style="clear:both;">
                    <a href="{{ route('practice') }}" class="button button-prev">Go back</a>
                    <input type="submit" class="button button-next" value="Continue" name="confirm">
                    <input type="text" style="display: none" value="step_4" name="agree">
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
@endsection
