@extends('layouts.app')

@section('content')


<div class="panel panel-heading">

    <div class="panel-heading">

    </div>

    <div class="panel-body">
        <table class="table">
            <thead>
                <th>
                    Name
                </th>
                <th>
                    Delete
                </th>
                <th>
                    Edit
                </th>
            </thead>
          
            <tbody>
            @foreach ($news as $news)
                <tr>
                    <td>{{ $news->topic}}</td>
                
                    <td>
                    <a href="{{route('news.edit',['id' => $news->id])}}" class="btn btn-xs btn-info">
                            Edit
                        </a>
                    </td>

                    
                        <form action="{{ route('news.destroy',['id' => $news->id]) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <td>
                                <button class="btn btn-xs btn-danger">Delete</button>

                            </td>
                        
                        </form>
                    </td>
                </tr>

            @endforeach    
            </tbody>
           

        </table>
    </div>
</div>


    
@endsection