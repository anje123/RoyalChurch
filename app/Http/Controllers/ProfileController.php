<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Finance;
use App\Expense;
use Barryvdh\DomPDF\Facade as PDF;
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

    public function finance (){
        return view('admin.profile.finance');
    }
    public function finance_save (Request $request){
        $this->validate($request,[
            'event' => 'required',
            'date' => 'required|date_format:d-m-Y',
            'amount' => 'required|numeric',
        ]);
       
        Finance::create([
            'date' => $request->date,
            'amount' => $request->amount,
            'event' => $request->event,
        ]);

        Session::flash('success','STORED SUCCESSFULLY');

        return redirect()->route('finance');

    }

    public function get_finance (){
        $sum = Finance::all()->sum('amount');
        $balance = Finance::all()->sum('amount') - Expense::all()->sum('amount');

        return view('admin.profile.finances')->with('finances',Finance::all())
                                             ->with('sum', $sum)
                                             ->with('balance',$balance);
    }

    public function finance_delete($id)
    {
        Finance::destroy($id);

        Session::flash('success','DELETED SUCCESSFULLY');

        return redirect()->route('finance');
    }

    public function finance_edit($id)
    {
        return view('admin.profile.finance_edit')->with('finance',Finance::find($id));
    }

    public function finance_update (Request $request, $id){
        $finance = Finance::find($id);

        $this->validate($request,[
            'event' => 'required',
            'date' => 'required|date_format:d-m-Y',
            'amount' => 'required|numeric',
        ]);


        $finance->date = $request->date;
        $finance->event = $request->event;
        $finance->amount = $request->amount;


       $finance->save();

        Session::flash('success','STORED SUCCESSFULLY');

        return redirect()->route('finance');

    }

    public function finance_pdf()
    {
        $finances = Finance::all();
        $sum = Finance::all()->sum('amount');
        $pdf = PDF::loadView('admin.profile.pdf',compact('finances','sum'));
        return $pdf->download('income_transaction.pdf');
        Session::flash('success','DOWNLOADED SUCCESSFULLY');

        return redirect()->route('finance');
    }
}
