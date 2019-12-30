@extends('layouts.app')

@section('content')


<div class="panel panel-heading">

    <div class="panel-heading">
     
    </div>

    <div class="panel-body">
        <table class="table">
            <thead>
                <th>
                    Date
                </th>
                <th>
                    Income Title
                </th>
                <th>
                    Amount
                </th>
                <th>
                    Delete
                </th>
                <th>
                    Edit
                </th>
            </thead>
          
            <tbody>
            @foreach ($finances as $finance)
                <tr>
                    <td>{{ $finance->date }}</td>
                    <td>{{ $finance->event }}</td>
                    
                    <td>{{ $finance->amount }}</td>


                
                    <td>
                    <a href="{{route('finance.edit',['id' => $finance->id])}}"  class="btn btn-xs btn-info">
                            Edit
                        </a>
                    </td>

                    
                <form action="{{route('finance.delete',['id' => $finance->id])}}"  method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <td>
                                <button  class="btn btn-xs btn-danger">Delete</button>

                            </td>
                        
                        </form>
                    </td>
                </tr>

            @endforeach    
            </tbody>
           

        </table>
    </div>
</div>

<div class="panel-footer">
     <h4>TOTAL INCOME: {{ number_format($sum, 2, '.', ',') }}</h4>
</div>


    
@endsection