@extends('layouts.app')

@section('content')

@include('admin.includes.error')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit News
        </div>

        <div class="panel-body">
        <form action="{{route('news.update',['id' => $news->id])}}" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}
                 {{method_field('PUT')}}
                <div class="form-group">
                    <label for="topic">Topic</label>
                <input type="text" class="form-control" value="{{ $news->topic }}" name="topic" id="">
                </div>

                

                <div class="form-group">
                    <label for="date">Day</label>
                    <input type="text" class="form-control" value="{{ $news->date }}" name="date" id="">
                </div>

                <div class="form-group">
                    <label for="Month">Month</label>
                    <input type="text" class="form-control" value="{{ $news->month }}" name="month" id="">
                </div>

                <div class="form-group">
                    <label for="Year">Year</label>
                    <input type="text" class="form-control" value="{{ $news->year }}" name="year" id="">
                </div>

            
                <div class="form-group">
                    <button class="form-control btn btn-success btn-xs" type="submit">SUBMIT</button>
                </div>

                
            </form>
        </div>
    </div>
@endsection