<?php

namespace App\Http\Controllers\Auth;


use App\Admitted;
use App\Language;
use App\Organization;
use App\OtherAdmitted;
use App\Practice;
use App\School;
use App\User;
use App\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Session;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        switch ($data['agree']):
            case 'step_1':
                $validator = Validator::make($data, [
                    'name' => ['required', 'string','min:3','max:255', 'unique:users'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'hint' => ['required', 'string', 'min:5', 'max:255'],
                    'security_question' => ['required', 'string'],
                    'secret_answer' => ['required', 'string', 'min:5', 'max:255'],
                    'how_did_you_find_us' => ['required', 'string', 'max:255'],
                    'find_us' => ['required', 'string','same:how_did_you_find_us', 'max:255'],
                ]);
                return $validator;
                break;

            case 'step_2':
                $validator = Validator::make($data, [
                    'prefix' => ['required', 'string', 'max:255'],
                    'first_name' => ['required', 'string', 'min:3', 'max:250'],
                    'last_name' => ['required', 'string', 'min:3', 'max:250'],
                    'middle_name' => ['required', 'string', 'min:3', 'max:250'],
                    'registration_number' => ['required', 'string', 'min:5', 'max:250'],
                    'law_firm_name' => ['required', 'string', 'min:5', 'max:250'],
                    'country' => ['required', 'string', 'min:1', 'max:250'],
                    'street_name' => ['required', 'string', 'min:3', 'max:250'],
                    'suite' => ['max:250'],
                    'city' => ['max:250'],
                    'states' => ['max:250'],
                    'province' => ['max:250'],
                    'zip_code' => ['max:250'],
                    'phone_int' => ['required', 'string', 'max:250'],
                    'phone_pref' => ['required', 'string', 'max:250'],
                    'phone_num' => ['required', 'string','min:3', 'max:120'],
                    'fax_int' => ['max:250'],
                    'fax_pref' => ['max:250'],
                    'fax_num' => ['max:250'],
                    'mobile_int' => ['max:250'],
                    'mobile_pref' => ['max:250'],
                    'mobile_num' => ['max:250'],
                    'website' => ['max:250'],
                    'primary_contact' => ['required', 'string','min:3', 'max:250'],
                    'description_profile' => ['max:500'],
                ]);
                return $validator;
                break;

            case 'step_3':
                $validator = Validator::make($data, [
                    'administrative_law' => ['required'],
                    'adoptions' =>['required'],
                    'appellate_practice' =>['required'],
                    'bankruptcy' =>['required'],
                    'business_law' =>['required'],
                    'civil_practice' =>['required'],
                    'civil_rights' =>['required'],
                    'class_actions' =>['required'],
                    'constitutional_law' =>['required'],
                    'contracts' =>['required'],
                    'copyrights' =>['required'],
                    'corporate_law' =>['required'],
                    'arbitration' =>['required'],
                    'entertainment_law' =>['required'],
                    'patents' =>['required'],
                    'divorce' =>['required'],
                    'education_law' =>['required'],
                    'employment_law' =>['required'],
                    'estate_litigation' =>['required'],
                    'family_law' =>['required'],
                    'government_law' =>['required'],
                    'general_practice' =>['required'],
                    'health_law' =>['required'],
                    'immigration_law' =>['required'],
                    'import_and_export_law' =>['required'],
                    'intellectual_property_law' =>['required'],
                    'internet_law' =>['required'],
                    'collections' =>['required'],
                    'identity_theft' =>['required'],
                    'torts' =>['required'],
                    'landlord_and_tenant_law' =>['required'],
                    'malpractice' =>['required'],
                    'mergers_and_acquisitions' =>['required'],
                    'personal_injury' =>['required'],
                    'products_liability' =>['required'],
                    'real_estate' =>['required'],
                    'securities_law' =>['required'],
                    'sports_law' =>['required'],
                    'trade_law' =>['required'],
                    'trademarks' =>['required'],
                    'traffic_violations' =>['required'],
                    'trusts_and_estates' =>['required'],
                    'criminal_law' =>['required'],
                    'international_law' =>['required'],
                    'wills_and_probation' =>['required'],
                ]);
                return $validator;
                break;

            case 'step_4':
                $validator = Validator::make($data, [
                    'school_name' => ['required', 'string', 'min:3', 'max:255'],
                    'gender' => ['required'],
                    'date' => ['required'],
                    'month' => ['required'],
                    'year' => ['required', 'required_with: date, month'],
                    "first_language"    => "required|array|min:2",
//                    "first_language.*"  => "required|string|distinct|min:3",

                    'supreme_court' => ['required'],
                    'admitted_month' => ['required'],
                    'admitted_date' => ['required'],
                    'admitted_year' => ['required', 'required_with: admitted_month, admitted_date'],
                    'reg_number' => ['required'],
                    'reg_date' => ['required'],

                    'other_supreme_court' => ['required'],
                    'other_admitted_month' => ['required'],
                    'other_admitted_date' => ['required'],
                    'other_admitted_year' => ['required', 'required_with: other_admitted_month, other_admitted_date'],
                    'other_reg_number' => ['required'],
                    'other_reg_date' => ['required'],

                ]);
                return $validator;
                break;

            case 'step_5':
                $validator = Validator::make($data, [
                    'password' => ['required', 'string', 'min:5', 'confirmed'],

                ]);
                return $validator;
                break;

            default:
                return redirect()->route('index');
        endswitch;

    }

    public function register(Request $request)
    {

        if ($request->has('agree'))
        {
            $this->validator($request->all())->validate();

            session($request->all());

            return redirect()->route('contact');
        }else
        {
            redirect()->back();
        }

    }

    public function registerContact(Request $request)
    {

        if ($request->has('agree'))
        {
            $this->validator($request->all())->validate();

            session($request->all());

            return redirect()->route('practice');

        }else
        {
            redirect()->back();
        }

    }

    public function registerPractice(Request $request)
    {

        if ($request->has('agree'))
        {
            $this->validator($request->all())->validate();

            session($request->all());

            return redirect()->route('details');

        }else
        {
            redirect()->back();
        }
    }

    public function showDetails(){

        $languages = Language::all();
        return view('details')->with(['languages' => $languages]);
    }

    public function registerDetails(Request $request)
    {

        if ($request->has('agree'))
        {
            $this->validator($request->all())->validate();

            session($request->all());

            return redirect()->route('submission');
        }else
        {
            redirect()->back();
        }
    }


    public function registerSubmission(Request $request)
    {

        if ($request->has('agree'))
        {
            $this->validator($request->all());

            session($request->all());

            $user = $this->create((session()->all()));

            $this->guard()->login($user);

            return  redirect($this->redirectPath());

        }else
        {
            redirect()->back();
        }
    }



    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create($data)
    {

        $user = User::create([
            'name' => $data['name'],
            'hint' => $data['hint'],
            'security_question' => $data['security_question'],
            'email' => $data['email'],
            'secret_answer' => $data['secret_answer'],
            'find_us' => $data['find_us'],
            'password' => Hash::make($data['password']),
        ]);

        $contact = Contact::create([
            'prefix' => $data['prefix'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
            'registration_number' => $data['registration_number'],
            'phone_int' => $data['phone_int'],
            'phone_pref' => $data['phone_pref'],
            'phone_num' => $data['phone_num'],
            'fax_int' => $data['fax_int'],
            'fax_pref' => $data['fax_pref'],
            'fax_num' => $data['fax_num'],
            'mobile_int' => $data['mobile_int'],
            'mobile_pref' => $data['mobile_pref'],
            'mobile_num' => $data['mobile_num'],
            'website' => $data['website'],
            'primary_contact' => $data['primary_contact'],
            'description_profile' => $data['description_profile'],


        ]);

        $organization = Organization::create([
            'organization_name' => $data['law_firm_name'],
            'country' => $data['country'],
            'street_name' => $data['street_name'],
            'suite' => $data['suite'],
            'city' => $data['city'],
            'states' => $data['states'],
            'province' => $data['province'],
            'zip_code' => $data['zip_code'],
        ]);

        $practice = Practice::create([
            'administrative_law' => $data['administrative_law'],
            'adoptions' => $data['adoptions'],
            'appellate_practice' => $data['appellate_practice'],
            'bankruptcy' => $data['bankruptcy'],
            'business_law' => $data['business_law'],
            'civil_practice' => $data['civil_practice'],
            'civil_rights' => $data['civil_rights'],
            'class_actions' => $data['class_actions'],
            'constitutional_law' => $data['constitutional_law'],
            'contracts' => $data['contracts'],
            'copyrights' => $data['copyrights'],
            'corporate_law' => $data['corporate_law'],
            'arbitration' => $data['arbitration'],
            'entertainment_law' => $data['entertainment_law'],
            'patents' => $data['patents'],
            'divorce' => $data['divorce'],
            'education_law' => $data['education_law'],
            'employment_law' => $data['employment_law'],
            'estate_litigation' => $data['estate_litigation'],
            'family_law' => $data['family_law'],
            'government_law' => $data['government_law'],
            'general_practice' => $data['general_practice'],
            'health_law' => $data['health_law'],
            'immigration_law' => $data['immigration_law'],
            'import_and_export_law' => $data['import_and_export_law'],
            'intellectual_property_law' => $data['intellectual_property_law'],
            'internet_law' => $data['internet_law'],
            'collections' => $data['collections'],
            'identity_theft' => $data['identity_theft'],
            'torts' => $data['torts'],
            'landlord_and_tenant_law' => $data['landlord_and_tenant_law'],
            'malpractice' => $data['malpractice'],
            'mergers_and_acquisitions' => $data['mergers_and_acquisitions'],
            'personal_injury' => $data['personal_injury'],
            'products_liability' => $data['products_liability'],
            'real_estate' => $data['real_estate'],
            'securities_law' => $data['securities_law'],
            'sports_law' => $data['sports_law'],
            'trade_law' => $data['trade_law'],
            'trademarks' => $data['trademarks'],
            'traffic_violations' => $data['traffic_violations'],
            'trusts_and_estates' => $data['trusts_and_estates'],
            'criminal_law' => $data['criminal_law'],
            'international_law' => $data['international_law'],
            'wills_and_probation' => $data['wills_and_probation'],
        ]);

        $school = School::create([
            'school_name' => $data['school_name'],
            'date_graduated' => $data['date'],
            'year_graduated' => $data['year'],
            'month_graduated' => $data['month'],
            'gender' => $data['gender'],
        ]);





        $admitted = Admitted::create([
            'supreme_court' => $data['supreme_court'],
            'admitted_month' => $data['admitted_month'],
            'admitted_date' => $data['admitted_date'],
            'admitted_year' => $data['admitted_year'],
            'registration_number' => $data['reg_number'],
            'registration_date' => $data['reg_date'],

        ]);

        $otherAdmitted = OtherAdmitted::create([
            'other_supreme_court' => $data['other_supreme_court'],
            'other_admitted_month' => $data['other_admitted_month'],
            'other_admitted_date' => $data['other_admitted_date'],
            'other_admitted_year' => $data['other_admitted_year'],
            'other_registration_number' => $data['other_reg_number'],
            'other_registration_date' => $data['other_reg_date'],

        ]);


        $user->language()->sync($data['first_language']);

        $user->contact()->save($contact);
        $user->organization()->save($organization);
        $user->practice()->save($practice);
        $user->school()->save($school);
        $user->admitted()->save($admitted);
        $user->otherAdmitted()->save($otherAdmitted);
        return $user;
    }

}
