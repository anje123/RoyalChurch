@extends('layouts.app')

@section('content')

@include('admin.includes.error')
    <div class="panel panel-default">
        <div class="panel-heading">
            Create A News
        </div>

        <div class="panel-body">
        <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}
                <div class="form-group">
                    <label for="topic">Topic</label>
                <input type="text" class="form-control" value="{{ old('topic') }}" name="topic" id="">
                </div>

                
                <div class="form-group">
                    <label for="date">Day</label>
                    <input type="text" class="form-control" value="{{ old('date') }}" name="date" id="">
                </div>

                <div class="form-group">
                    <label for="Month">Month</label>
                    <input type="text" class="form-control" value="{{ old('month') }}" name="month" id="">
                </div>

                <div class="form-group">
                    <label for="Year">Year</label>
                    <input type="text" class="form-control" value="{{ old('year') }}" name="year" id="">
                </div>


                <div class="form-group">
                    <button class="form-control btn btn-success btn-xs" type="submit">SUBMIT</button>
                </div>

                
            </form>
        </div>
    </div>
@endsection