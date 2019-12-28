@extends('layouts.app')

@section('content')

@include('admin.includes.error')
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Profile
        </div>

        <div class="panel-body">
        <form action="{{route('profile.update',['id' => $profile->id])}}" method="post" enctype="multipart/form-data">

                 {{ csrf_field() }}
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="{{ $profile->address }}" name="address" id="">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{$profile->email}}">
                </div>

                <div class="form-group">
                    <label for="phoneno">Phone No</label>
                    <input type="text" class="form-control" value="{{ $profile->phone_no }}" name="phone_no" id="">
                </div>

                <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" value="{{ $profile->facebook  }}" name="facebook" id="">
                </div>

                <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="text" class="form-control" value="{{ $profile->youtube  }}" name="youtube" id="">
                </div>

                <div class="form-group">
                    <label for="instagram">Instagram</label>
                    <input type="text" class="form-control" value="{{ $profile->instagram  }}" name="instagram" id="">
                </div>
         

                <div class="form-group">
                    <button class="form-control btn btn-success btn-xs" type="submit">SUBMIT</button>
                </div>

                
            </form>
        </div>
    </div>
@endsection