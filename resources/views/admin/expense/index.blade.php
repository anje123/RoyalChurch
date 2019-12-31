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
                    Expense Title
                </th>
                <th>
                    Amount
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </thead>
          
            <tbody>
            @foreach ($expenses as $expense)
                <tr>
                    <td>{{ $expense->date }}</td>
                    <td>{{ $expense->event }}</td>
                    
                    <td> &#8358 {{ number_format($expense->amount, 2, '.', ',') }}</td>


                
                    <td>
                    <a href="{{route('expense.edit',['id' => $expense->id])}}"  class="btn btn-xs btn-info">
                            Edit
                        </a>
                    </td>

                    
                <form action="{{route('expense.delete',['id' => $expense->id])}}" method="post">
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
     <h5>TOTAL EXPENSES: &#8358 {{ number_format($sum, 2, '.', ',') }}</h5>
     <h5>APPROXIMATE ACCOUNT BALANCE: &#8358 {{ number_format($balance, 2, '.', ',') }}</h5>
     <br>
     <a href="{{route('expense.pdf')}}"  class="btn btn-success">
        DOWNLOAD TABLE
    </a>
</div>


    
@endsection