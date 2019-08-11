<?php

namespace App\Http\Controllers;

use App\Language;
use App\School;
use App\User;
use App\Contact;
use App\Practice;
//use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
            $contacts = User::find(Auth::user()->id)->contact()->get();
            $schools = User::find(Auth::user()->id)->school()->get();
            $languages = User::find(Auth::user()->id)->language()->groupBy('language_user.user_id', 'language_id')->select('language', 'image')->get();
            $adresses = User::find(Auth::user()->id)->organization()->get();

            $adresse = array();
            foreach ($adresses as $item){
                $adresse = $item;
            }

            $contact = array();
            foreach ($contacts as $item){
                $contact = $item;
            }
        }

//        $image = Auth::user()->image;

        if(Auth::user()->image){
            $image = Auth::user()->image;
        }else{
            $image = 'img/empty.jpg';
        }

        $user = Auth::user()->name;

        return view('profile')->with(['name' => $user, 'image' => $image, 'schools' => $schools, 'contact' => $contact, 'languages' => $languages, 'adresse' =>  $adresse]);
    }

    public function loadImage(Request $request)
    {
        if (!empty($request->file('image'))){

            $path = $request->file('image')->store('uploads', 'public');

            $user = User::find(Auth::user()->id);

            $user->image = $path;

            $user->save();

        }else{
            return redirect()->route('profile');
        }

        return redirect()->route('profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
