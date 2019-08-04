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
                <li class="arrow_box active"><span>Step 3</span><br>practice area</li>
                <li class="arrow_box"><span>Step 4</span><br>more details</li>
                <li class="arrow_box"><span>Step 5</span><br>submission</li>
            </ul>

            <form method="POST" action="{{ route('practice') }}">
                @csrf
            <div class="main-box-content">

                <div class="main-box-content-section">
                    <div class="clear">
                        <div class="row">
                            <?php $count = count($practices) / 3?>
                            @foreach($practices->chunk($count) as $chunk)
                                <div class="col-sm-4">
                                    @foreach($chunk as $practice)
                                        <div class="chose"><label >
                                           {{--<input type="hidden" name="practice[{{$practice->id}}]" value="">--}}
                                           <input type="checkbox" name="practice[{{$practice->id}}]"
                                           <?php $arr = session()->get('practice', 0);?>
                                           value="{{$practice->id}}" @if (isset($arr[$practice->id ]) && $arr[$practice->id ] > 0) checked="checked" @endif>
                                           <span>{{$practice->name}}</span></label>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="main-box-content-buttons" style="clear:both;">
                    <a href="{{ route('contact') }}" class="button button-prev">Go back</a>
                    <input type="submit" class="button button-next" value="Continue" name="confirm">
                    <input type="text" style="display: none" value="step_3" name="agree">
                </div>
            </div>
            </form>
        </div>
    </div>
</section>
@endsection
