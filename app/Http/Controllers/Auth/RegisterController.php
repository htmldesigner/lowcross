<?php

namespace App\Http\Controllers\Auth;

use App\TypePractice;
use App\Admitted;
use App\Language;
use App\Organization;
use App\OtherAdmitted;
use App\Practice;
use App\School;
use App\User;
use App\Contact;

use App\Http\Controllers\Controller;
use Carbon\CarbonPeriod;
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
                    'find_us' => ['required', 'string', 'min:3', 'max:255'],
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

                    'website' => ['max:250'],
                    'primary_contact' => ['required', 'string','min:3', 'max:250'],
                    'description_profile' => ['max:500'],

                    'phone' =>"array|max:3",
                    "phone.*"  => "required|string|min:2",

                    'fax' => ['array', 'min:3', 'max:10'],
                    'mobile' => ['array', 'min:3','max:10'],
                ]);
                return $validator;
                break;

            case 'step_3':
                $validator = Validator::make($data, [
                   "practice"    => "array|min:0",
//                   "practice.*"  => "required|string|distinct|min:2",
                ]);

                return $validator;

                break;

            case 'step_4':
                $validator = Validator::make($data,[
                    'school_name' => ['required', 'string', 'min:3', 'max:255'],
                    "language.*"    => "required|min:1|",
                    'gender' => ['required'],
                    'date' => ['required'],
                    'month' => ['required'],
                    'year' => ['required', 'required_with: date, month'],
//                    "language.*"  => "required|string|distinct|min:2",

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

                    "type_practice"    => "required|min:1",
//                    "type_practice.*"  => "required|string|distinct|min:2",

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

    public function showPractice(){

        $practices = Practice::all();

        return view('practice')->with(['practices' => $practices]);

    }

    public function registerPractice(Request $request)
    {
        if ($request->has('agree'))
        {
            $this->validator($request->all())->validate();
            if (is_null($request->post('practice', null))) {
                session(['practice' => null]);
            };
            session($request->all());

            return redirect()->route('details');

        }else
        {
            redirect()->back();
        }
    }

    public function showDetails(){

        $languages = Language::all();

        $typePractices = TypePractice::all();

        return view('details')->with(['languages' => $languages, 'typePractices' => $typePractices]);
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

        $phone = implode('', collect($data['phone'])->all());
        $fax = implode('', collect($data['fax'])->all());
        $mobile = implode('', collect($data['mobile'])->all());

        $contact = Contact::create([
            'prefix' => $data['prefix'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'middle_name' => $data['middle_name'],
            'registration_number' => $data['registration_number'],

            'website' => $data['website'],
            'primary_contact' => $data['primary_contact'],
            'description_profile' => $data['description_profile'],
            'phone' => $phone,
            'fax' => $fax,
            'mobile' => $mobile,


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

        $user->language()->sync($data['language']);
        $user->practice()->sync($data['practice']);
        $user->typePractice()->sync($data['type_practice']);

        $user->contact()->save($contact);
        $user->organization()->save($organization);
        $user->school()->save($school);
        $user->admitted()->save($admitted);
        $user->otherAdmitted()->save($otherAdmitted);
        return $user;
    }

}
