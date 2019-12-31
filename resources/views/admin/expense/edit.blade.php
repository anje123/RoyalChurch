@extends('layouts.app')

@section('content')

@include('admin.includes.error')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Expense
        </div>

        <div class="panel-body">
        <form action="{{ route('expense.update',['id' => $expense->id]) }}" method="post" enctype="multipart/form-data"   >
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="date">Date</label>
                    <h6 for="" class="pull-right">eg . 19-11-2019</h6>

                <input type="text" class="form-control" value="{{$expense->date}}"   name="date" id="">
                </div>

                <div class="form-group">
                    <label for="event">Expense Title</label>
                    <h6 for="" class="pull-right">eg . renovation of church</h6>
                    <input type="text" class="form-control" value="{{$expense->event}}" name="event"  id="event" >
                </div>

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <h6 for="" class="pull-right">eg . 35000</h6>
                    <input type="text" class="form-control" value="{{$expense->amount}}" name="amount" id="">
                </div>


                <div class="form-group">
                    <button class="form-control btn btn-success btn-xs" type="submit">SUBMIT</button>
                </div>

                
            </form>
        </div>
    </div>
@endsection