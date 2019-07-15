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
                            <div class="col-sm-4">
                                
                                <div class="chose"><label>
                                        <input type="hidden" name="administrative_law" value="0">
                                        <input type="checkbox" name="administrative_law" value="Administrative Law" {{ session()->get('administrative_law') ? ' checked' : '' }} >
                                        <span>Administrative Law </span></label>
                                </div>
                                
                                <div class="chose"><label>
                                        <input type="hidden" name="adoptions" value="0">
                                        <input type="checkbox" name="adoptions" value="1" {{ session()->get('adoptions') ? ' checked' : '' }} >
                                        <span>Adoptions</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="appellate_practice" value="0">
                                        <input type="checkbox" name="appellate_practice" value="1" {{ session()->get('appellate_practice') ? ' checked' : '' }} >
                                        <span>Appellate Practice</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="bankruptcy" value="0">
                                        <input type="checkbox" name="bankruptcy" value="1" {{ session()->get('bankruptcy') ? ' checked' : '' }} >
                                        <span>Bankruptcy</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="business_law" value="0">
                                        <input type="checkbox" name="business_law" value="1" {{ session()->get('business_law') ? ' checked' : '' }} >
                                        <span>Business Law</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="civil_practice" value="0">
                                        <input type="checkbox" name="civil_practice" value="1" {{ session()->get('civil_practice') ? ' checked' : '' }} >
                                        <span>Civil Practice</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="civil_rights" value="0">
                                        <input type="checkbox" name="civil_rights" value="1" {{ session()->get('civil_rights') ? ' checked' : '' }} >
                                        <span>Civil Rights</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="class_actions" value="0">
                                        <input type="checkbox" name="class_actions" value="1" {{ session()->get('class_actions') ? ' checked' : '' }} >
                                        <span>Class Actions</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="constitutional_law" value="0">
                                        <input type="checkbox" name="constitutional_law" value="1" {{ session()->get('constitutional_law') ? ' checked' : '' }} >
                                        <span>Constitutional Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="contracts" value="0">
                                        <input type="checkbox" name="contracts" value="1" {{ session()->get('contracts') ? ' checked' : '' }} >
                                        <span>Contracts</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="copyrights" value="0">
                                        <input type="checkbox" name="copyrights" value="1" {{ session()->get('copyrights') ? ' checked' : '' }} >
                                        <span>Copyrights</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="corporate_law" value="0">
                                        <input type="checkbox" name="corporate_law" value="1" {{ session()->get('corporate_law') ? ' checked' : '' }} >
                                        <span>Corporate Law</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="arbitration" value="0">
                                        <input type="checkbox" name="arbitration" value="1" {{ session()->get('arbitration') ? ' checked' : '' }} >
                                        <span>Arbitration</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="entertainment_law" value="0">
                                        <input type="checkbox" name="entertainment_law" value="1" {{ session()->get('entertainment_law') ? ' checked' : '' }} >
                                        <span>Entertainment Law</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="patents" value="0">
                                        <input type="checkbox" name="patents" value="1" {{ session()->get('patents') ? ' checked' : '' }} >
                                        <span>Patents</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chose"><label>
                                        <input type="hidden" name="divorce" value="0">
                                        <input type="checkbox" name="divorce" value="1" {{ session()->get('divorce') ? ' checked' : '' }} >
                                        <span>Divorce</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="education_law" value="0">
                                        <input type="checkbox" name="education_law" value="1" {{ session()->get('education_law') ? ' checked' : '' }} >
                                        <span>Education Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="employment_law" value="0">
                                        <input type="checkbox" name="employment_law" value="1" {{ session()->get('employment_law') ? ' checked' : '' }} >
                                        <span>Employment Law</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="estate_litigation" value="0">
                                        <input type="checkbox" name="estate_litigation" value="1" {{ session()->get('estate_litigation') ? ' checked' : '' }} >
                                        <span>Estate Litigation</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="family_law" value="0">
                                        <input type="checkbox" name="family_law" value="1" {{ session()->get('family_law') ? ' checked' : '' }} >
                                        <span>Family Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="government_law" value="0">
                                        <input type="checkbox" name="government_law" value="1" {{ session()->get('government_law') ? ' checked' : '' }} >
                                        <span>Government Law</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="general_practice" value="0">
                                        <input type="checkbox" name="general_practice" value="1" {{ session()->get('general_practice') ? ' checked' : '' }} >
                                        <span>General Practice </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="health_law" value="0">
                                        <input type="checkbox" name="health_law" value="1" {{ session()->get('health_law') ? ' checked' : '' }} >
                                        <span>Health Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="immigration_law" value="0">
                                        <input type="checkbox" name="immigration_law" value="1" {{ session()->get('immigration_law') ? ' checked' : '' }} >
                                        <span>Immigration Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="import_and_export_law" value="0">
                                        <input type="checkbox" name="import_and_export_law" value="1" {{ session()->get('import_and_export_law') ? ' checked' : '' }} >
                                        <span>Import and Export Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="intellectual_property_law" value="0">
                                        <input type="checkbox" name="intellectual_property_law" value="1" {{ session()->get('intellectual_property_law') ? ' checked' : '' }} >
                                        <span>Intellectual Property Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="internet_law" value="0">
                                        <input type="checkbox" name="internet_law" value="1" {{ session()->get('internet_law') ? ' checked' : '' }} >
                                        <span>Internet Law	</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="collections" value="0">
                                        <input type="checkbox" name="collections" value="1" {{ session()->get('collections') ? ' checked' : '' }} >
                                        <span>Collections</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="identity_theft" value="0">
                                        <input type="checkbox" name="identity_theft" value="1" {{ session()->get('identity_theft') ? ' checked' : '' }} >
                                        <span>Identity Theft </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="torts" value="0">
                                        <input type="checkbox" name="torts" value="1" {{ session()->get('torts') ? ' checked' : '' }} >
                                        <span>Torts</span></label>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="chose"><label>
                                        <input type="hidden" name="landlord_and_tenant_law" value="0">
                                        <input type="checkbox" name="landlord_and_tenant_law" value="1" {{ session()->get('landlord_and_tenant_law') ? ' checked' : '' }} >
                                        <span>Landlord and Tenant Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="malpractice" value="0">
                                        <input type="checkbox" name="malpractice" value="1" {{ session()->get('malpractice') ? ' checked' : '' }} >
                                        <span>Malpractice</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="mergers_and_acquisitions" value="0">
                                        <input type="checkbox" name="mergers_and_acquisitions" value="1" {{ session()->get('mergers_and_acquisitions') ? ' checked' : '' }} >
                                        <span>Mergers and Acquisitions </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="personal_injury" value="0">
                                        <input type="checkbox" name="personal_injury" value="1" {{ session()->get('personal_injury') ? ' checked' : '' }} >
                                        <span>Personal Injury </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="products_liability" value="0">
                                        <input type="checkbox" name="products_liability" value="1" {{ session()->get('products_liability') ? ' checked' : '' }} >
                                        <span>Products Liability </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="real_estate" value="0">
                                        <input type="checkbox" name="real_estate" value="1" {{ session()->get('real_estate') ? ' checked' : '' }} >
                                        <span>Real Estate </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="securities_law" value="0">
                                        <input type="checkbox" name="securities_law" value="1" {{ session()->get('securities_law') ? ' checked' : '' }} >
                                        <span>Securities Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="sports_law" value="0">
                                        <input type="checkbox" name="sports_law" value="1" {{ session()->get('sports_law') ? ' checked' : '' }} >
                                        <span>Sports Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="trade_law" value="0">
                                        <input type="checkbox" name="trade_law" value="1" {{ session()->get('trade_law') ? ' checked' : '' }} >
                                        <span>Trade Law</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="trademarks" value="0">
                                        <input type="checkbox" name="trademarks" value="1" {{ session()->get('trademarks') ? ' checked' : '' }} >
                                        <span>Trademarks</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="traffic_violations" value="0">
                                        <input type="checkbox" name="traffic_violations" value="1" {{ session()->get('traffic_violations') ? ' checked' : '' }} >
                                        <span>Traffic Violations</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="trusts_and_estates" value="0">
                                        <input type="checkbox" name="trusts_and_estates" value="1" {{ session()->get('trusts_and_estates') ? ' checked' : '' }} >
                                        <span>Trusts and Estates </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="criminal_law" value="0">
                                        <input type="checkbox" name="criminal_law" value="1" {{ session()->get('criminal_law') ? ' checked' : '' }} >
                                        <span>Criminal Law</span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="international_law" value="0">
                                        <input type="checkbox" name="international_law" value="1" {{ session()->get('international_law') ? ' checked' : '' }} >
                                        <span>International Law </span></label>
                                </div>
                                <div class="chose"><label>
                                        <input type="hidden" name="wills_and_probation" value="0">
                                        <input type="checkbox" name="wills_and_probation" value="1" {{ session()->get('wills_and_probation') ? ' checked' : '' }} >
                                        <span>Wills and Probation</span></label>
                                </div>
                            </div>
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
