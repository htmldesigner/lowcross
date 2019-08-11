@extends('layouts.indexProfile')

@section('content')
</section>
<section class="main">
    <div class="container">
        <div class="main-box">
            <div class="main-box-head">
                <h1 class="main-box-head-header">
                    ATTORNEY’S PROFILE
                </h1>
                <span class="main-box-head-header-description">
               Improve your listings by supporting legal information
               </span>
            </div>
            <div class="main-box-content">
                <div class="attorney">
                    <div class="block-face">
                        @if(Auth::user()->image)
                            <img src="{{asset('/storage/' . $image)}}" alt="Alt">
                        @else
                            <img src="{{asset($image)}}" alt="Alt">
                        @endif
                        <form id="uploadimage" method="POST" action="{{ route('profile') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="uploadbtn" class="uploadButton">Load photo</label>
                                <input style="opacity: 0; z-index: -1;" type="file" name="image" id="uploadbtn">
                            </div>
                            {{--<button class="btn btn-default" type="submit">Load photo</button>--}}
                        </form>
                        <div class="list">
                            <p class="bm">Bookmarks <span id="bm">(35)</span></P>
                            <p class="itp">In the Process <span id="itp">(2)</span></P>
                            <p class="sbm">Submitted by me <span id="sbm">(23)</span></P>
                            <p class="pending">Pending <span id="pending">(2)</span></P>
                            <p class="case">The case I won <span id="case">(5)</span></P>
                        </div>
                    </div>
                    <div class="info">
                        <div class="company_name">
                           <h2>{{$contact->first_name }} {{$contact->last_name }}</h2>
                        </div>
                        <div class="info-left">
                            <ul class="">
                                <li><span>Legal Experience:</span> <span>18 years</span></li>
                                <li><span>Law School:</span>
                                    <span>
                                        @foreach($schools as $school)
                                            {{$school->school_name}}
                                        @endforeach
                                    </span>
                                </li>
                                <li><span>Jurisdiction:</span> <span>California, District of Columbia</span></li>
                            </ul>
                            <div class="blue-block">
                                <div class="blue-block-head">
                                    Law Office Name
                                </div>
                                <div class="blue-block-addr">
                                    <p>
                                    {{($adresse->country or $adresse->states) ? $adresse->country .', '. $adresse->states : $adresse->country}}
                                    </p>
                                    <p>{{$adresse->street_name}}, Suite {{$adresse->suite}} </p>
                                    <p>{{$adresse->province}}, {{$adresse->city}} {{$adresse->zip_code}} </p>
                                    <p>{{$contact->phone}}</p>
                                </div>
                                <div class="blue-block-footer">
                                    <a href="https://www.google.com/maps/search/?api=1&query={{$adresse->country}}+{{$adresse->street_name}}">View Map</a> <a href="">Lawyer’s Web Site</a>
                                </div>
                            </div>
                        </div>
                        <div class="attorney_langs">
                            <p style="font-weight:bold;">Langs</p>
                            @foreach($languages as $lang)
                                <p class="lang_flag"><img class="flag" src="{{$lang->image}}" alt="Alt">{{$lang->language}}</p>
                            @endforeach
                            <div class="social-profiles">
                                <p class="social-profiles-head">Social Network Profile:</p>
                                <p class="sociale fb">Facebook</p>
                                <p class="sociale in">LinkedIn</p>
                                <p class="sociale tw">Twitter</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear info_settings">
                    <div class="blue_ribbon">
                        <img src="img/im.png">
                        <span>ACCOUNT INFORMATION SETTING </span>
                        <div class="hide-show">
                            <span class="hide">hide</span><span class="show">show</span>
                        </div>
                    </div>
                    <div class="wrap">
                        <div class="col-md-4">
                            <ul>
                                <li>Overview</li>
                                <li><strong>Practice Area</strong></li>
                                <li>My Account Information</li>
                                <li>Payment Information</li>
                                <li>My Balance</li>
                                <li>Order History</li>
                                <li>Account Alerts</li>
                                <li>My Messages</li>
                            </ul>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <p>Criminal Law</p>
                                    <p>White Collar Crime</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 glance">
                                    <h3>At a Glance</h3>
                                    <p>Scott Williams practices in Criminal Law. He is also Managing Partner in White Collar Crime, Probate Group of WWR.  Scott is based in the Cleveland office. Over the years, he has </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear case_statistics">
                    <div class="blue_ribbon">
                        <img src="img/bag2.png">
                        <span>CASE TRANSFER MANAGER</span>
                        <div class="hide-show">
                            <span class="hide">hide</span><span class="show">show</span>
                        </div>
                    </div>
                    <div class="wrap">
                        <ul class="nav nav-tabs" role="tablist">
                            <li><a href="javascript:void(0);" class="active" aria-controls="t1" role="tab" data-toggle="tab">CASES</a></li>
                            <li><a href="javascript:void(0);" aria-controls="t2" role="tab" data-toggle="tab">TRANSFER</a></li>
                            <li><a href="javascript:void(0);" aria-controls="t3" role="tab" data-toggle="tab">AUCTIONS</a></li>
                            <li><a href="javascript:void(0);" aria-controls="t4" role="tab" data-toggle="tab">My BIDS</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="t1">
                                <div class="table">
                                    <div class="table-row">
                                        <span>Type of Case</span><span>Country</span><span>Status</span><span>Date</span><span>Category</span>
                                    </div>
                                    <div class="table-row">
                                        <span class="blue-bag im"><a href="">Arbitration</a></span><span class="country can">Canada</span><span>New</span><span>May 28, 2011</span><span>Approved</span>
                                    </div>
                                    <div class="table-row">
                                        <span class="blue-bag im"><a href="">Bankruptcy</a></span><span class="country can">United States</span><span>New</span><span>June 2, 2011</span><span>Approved</span>
                                    </div>
                                    <div class="table-row">
                                        <span class="black-bag im"><a href="">Business Law</a></span><span class="country ru">Russia</span><span>New</span><span>June 30, 2011</span><span>Approved</span>
                                    </div>
                                    <div class="table-row">
                                        <span class="red-bag im"><a href="">Contracts</a></span><span class="country can">Ukraine</span><span>New</span><span>July 5, 2011</span><span>Approved</span>
                                    </div>
                                    <div class="table-row">
                                        <span class="blue-bag im"><a href="">Immigration/Naturalization</a></span><span class="country deu">Germany</span><span>In Court</span><span>December 1,2011</span><span>Approved</span>
                                    </div>
                                    <div class="table-row">
                                        <span class="blue-bag im"><a href="">Mergers/Acquisitions</a></span><span class="country can">Canada</span><span>In Court</span><span>January 22, 2012</span><span>Approved</span>
                                    </div>
                                    <div class="table-row">
                                        <span class="grey-bag im"><a href="">Personal Injury</a></span><span class="country can">Poland</span><span>New</span><span>February 15, 2012</span><span>Approved</span>
                                    </div>
                                </div>
                                <div class="tab-footer">
                                    <div class="col-md-4">
                                        Displaying 1-7 of 7 cases
                                    </div>
                                    <div class="col-md-4">
                                        Results per page
                                        <select>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 pagin">
                                        <span class="pagin-start">&laquo;</span><span class="pagin-prev">&lsaquo;</span><span class="pagin-num">1</span>of<span class="pagin-total">1</span><span class="pagin-next">&rsaquo;</span><span class="pagin-end">&raquo;</span>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="t2">
                                Это второй таб
                            </div>
                            <div role="tabpanel" class="tab-pane" id="t3">
                                Это третий таб
                            </div>
                            <div role="tabpanel" class="tab-pane" id="t4">
                                Это четвертый таб
                            </div>
                        </div>
                        <style>
                            .tab-content{margin:0 40px 40px}
                            .tab-pane{display:none;}
                            .tab-pane.active{display:block}
                            .nav-tabs{margin:40px 40px 0}
                            .nav-tabs li{display:inline-block;padding-left:0}
                            .nav-tabs a{padding:10px 20px;background:#8B7765;color:#fff; border-radius:10px 10px 0 0;font-weight:bold}
                            .nav-tabs a.active{background:#fff;color:#555}
                        </style>
                        <div class="clear" id="keyses">
                            <div class="col-md-4">
                                <p class="im-min gold-bag-min">Available Cases</p>
                                <p class="im-min grey-bag-min">In the Process</p>
                                <p class="im-min black-bag-min">Case submitted by me</p>
                            </div>
                            <div class="col-md-4">
                                <p class="im-min red-bag-min">Pending</p>
                                <p class="im-min blue-bag-min">The Case I won</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
</div>
@endsection
