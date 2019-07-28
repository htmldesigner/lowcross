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
            $publication = User::select()->where('id', Auth::user()->id)->get();
            $contact = Contact::select()->where('id', Auth::user()->id)->get();
            $schools = School::select()->where('id', Auth::user()->id)->get();
            $languages = User::find(Auth::user()->id)->language()->groupBy('language_user.user_id', 'language_id')->select('language', 'image')->get();
        }
         $user = Auth::user()->name;
        return view('profile')->with(['publication' => $publication, 'name' => $user, 'schools' => $schools, 'contact' => $contact, 'languages' => $languages ]);
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
