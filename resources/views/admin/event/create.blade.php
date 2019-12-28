@extends('layouts.app')

@section('content')

@include('admin.includes.error')
    <div class="panel panel-default">
        <div class="panel-heading">
    Create An Event
        </div>

        <div class="panel-body">
        <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <h6>Please include Venue at the end of the name</h6>
                    <h6 for="" class="pull-right">eg . CHURCH EASTER CAMP OUT @ Redemption Camp</h6>
                <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="">
                </div>


                <div class="form-group">
                    <label for="date">Event's Day</label>
                    <h6 for="" class="pull-right">eg . 6th</h6>
                    <input type="text" class="form-control" value="{{ old('date') }}" name="date" id="">
                </div>

          
                <div class="form-group">
                    <label for="Month">Event's Month</label>
                    <h6 for="" class="pull-right">eg . Feb</h6>
                    <input type="text" class="form-control" value="{{ old('month') }}" name="month" id="">
                </div>

                <div class="form-group">
                    <label for="Year">Event's Year</label>
                    <h6 for="" class="pull-right">eg . 2019</h6>
                    <input type="text" class="form-control" value="{{ old('year') }}" name="year" id="">
                </div>

                <div class="form-group">
                    <h6 for="" class="pull-right">eg .  8:00am</h6>
                    <label for="time">Event's Time</label>
                    <input type="text" class="form-control" value="{{ old('time') }}" name="time" id="">
                </div>


                <div class="form-group">
                    <button class="form-control btn btn-success btn-xs" type="submit">SUBMIT</button>
                </div>

                
            </form>
        </div>
    </div>
@endsection