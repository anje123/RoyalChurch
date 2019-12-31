<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    
            <table class="table">
                <thead>
                    <tr class="table-info">
                    <th>
                        Date
                    </th>
                    <th>
                        Expense Title
                    </th>
                    <th>
                        Amount
                    <th>
                    </tr>
                
                </thead>
              
                <tbody>
                @foreach ($expenses as $expense)
                    <tr>
                        <td>{{ $expense->date }}</td>
                        <td>{{ $expense->event }}</td>
                        
                        <td> N {{ number_format($expense->amount, 2, '.', ',') }}</td>
    
    
                    
                        </td>
                    </tr>
    
                @endforeach    
                </tbody>
               
    
            </table>
       
<div class="container">
        <h4>TOTAL EXPENSES: N {{ number_format($sum, 2, '.', ',') }}</h4>
    
</div>        
    
    
</body>
</html>