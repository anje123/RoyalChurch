<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Session;

class ProfileController extends Controller
{
    public function edit($id){
        return view('admin.profile.edit')->with('profile',Profile::find($id));
    }


    public function update(Request $request, $id){
        $profile = Profile::find($id);

        $this->validate($request,[
            'email' => 'required|email',
            'address' => 'required',
            'phone_no' => 'required',
            'youtube' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
        ]);
            $profile->email = $request->email;
            $profile->address = $request->address;
            $profile->phone_no = $request->phone_no;
            $profile->youtube = $request->youtube;
            $profile->facebook = $request->facebook;
            $profile->instagram = $request->instagram;

            $profile->save();

            Session::flash('success','UPDATED SUCCESSFULLY');

            return redirect()->back();
        

    }
}
