<?php

namespace App\Http\Controllers;
use App\Expense;
use App\Finance;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Session;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sum = Expense::all()->sum('amount');
        $balance = Finance::all()->sum('amount') - Expense::all()->sum('amount');

            return view('admin.expense.index')->with('expenses', Expense::all())
                                              ->with('sum', $sum)
                                              ->with('balance',$balance);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.expense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'event' => 'required',
            'date' => 'required|date_format:d-m-Y',
            'amount' => 'required|numeric',
        ]);
       
        Expense::create([
            'date' => $request->date,
            'amount' => $request->amount,
            'event' => $request->event,
        ]);

        Session::flash('success','STORED SUCCESSFULLY');

        return redirect()->route('expense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.expense.edit')->with('expense',Expense::find($id));
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
        $expense = Expense::find($id);

        $this->validate($request,[
            'event' => 'required',
            'date' => 'required|date_format:d-m-Y',
            'amount' => 'required|numeric',
        ]);


        $expense->date = $request->date;
        $expense->event = $request->event;
        $expense->amount = $request->amount;


       $expense->save();

        Session::flash('success','STORED SUCCESSFULLY');

        return redirect()->route('expense.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Expense::destroy($id);
        Session::flash('success','DELETED SUCCESSFULLY');

        return redirect()->route('expense.index');
    }


    public function expense_pdf()
    {
        $expenses = Expense::all();
        $sum = Expense::all()->sum('amount');
        $pdf = PDF::loadView('admin.expense.pdf',compact('expenses','sum'));
        return $pdf->download('expenses_transaction.pdf');
        Session::flash('success','DOWNLOADED SUCCESSFULLY');

        return redirect()->route('expenses.index');
    }
}
