@extends('layouts.app')

@section('content')



@include('admin.includes.error')

    <div class="panel panel-default">
        <div class="panel-heading">
        <h3>Create An Event</h3>
        </div>

        <div class="panel-body">
            
        <form action="{{route('event.update',['id' => $event->id])}}" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}
                 {{method_field('PUT')}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <h6>Please include Venue at the end of the name</h6>
                    <h6 for="" class="pull-right">eg .CHURCH EASTER CAMP OUT @ Redemption Camp</h6>
                <input type="text" class="form-control"  value="{{ $event->name }}" name="name" id="">
                </div>


                <div class="form-group">
                    <label for="date">Day</label>
                    <h6 for="" class="pull-right">eg . 6th</h6>
                    <input type="text" class="form-control" value="{{$event->date}}" name="date" id="">
                </div>

                <div class="form-group">
                    <label for="Month">Month</label>
                    <h6 for="" class="pull-right">eg . Feb</h6>
                    <input type="text" class="form-control" value="{{$event->month}}" name="month" id="">
                </div>

                <div class="form-group">
                    <label for="Year">Year</label>
                    <input type="text" class="form-control" value="{{$event->year}}" name="year" id="">
                </div>

                <div class="form-group">
                    <label for="time">Time</label>
                    <h6 for="" class="pull-right">eg .  8:00am</h6>
                    <input type="text" class="form-control" value="{{$event->time}}" name="time" id="">
                </div>


                <div class="form-group">
                    <button class="form-control btn btn-success btn-xs" type="submit">SUBMIT</button>
                </div>

                
            </form>
        </div>
    </div>

@endsection