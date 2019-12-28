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
            @foreach ($event as $events)
                <tr>
                    <td>{{ $events->name }}</td>
                
                    <td>
                    <a href="{{route('event.edit',['id' => $events->id])}}" class="btn btn-xs btn-info">
                            Edit
                        </a>
                    </td>

                    
                        <form action="{{ route('event.destroy',['id' => $events->id]) }}" method="post">
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