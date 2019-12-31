<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Royal') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/toastr.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body style="background-image: url('{{ asset('asset/water.jpg')}}');">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top" style="background-image: url('{{ asset('asset/water.jpg')}}');">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" style="color:white" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul style="color:white" class="nav navbar-nav navbar-right" >
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a style="color:white" href="{{ url('/login') }}">Login</a></li>
                            <li><a style="color:white" href="{{ url('/register') }}">Register</a></li>

                            
                        @else
                            <li class="dropdown">
                                <a style="color:white" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @if (Auth::check()) 
            
        <div class="container">
            <div class="row">
               <div class="col-lg-4">
                <ul class="list-group">
                   <li class="list-group-item">
                      <a class="mb-0" href="/admin/home">Home</a>
                   </li>
                </ul>
                <ul class="list-group">

                <li class="list-group-item">
                    <a class="mb-0" href="{{route('event.create')}}"> Create Event</a>
                </li>
                    <li class="list-group-item">
                       <a href="{{route('event.index')}}">Events</a>
                   </li>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{route('news.create')}}"> Create News</a>
                    </li>
                        <li class="list-group-item">
                        <a href="{{route('news.index')}}">News</a>
                    </li>
                </ul>


                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{route('profile.edit',['id' => 1])}}"> Edit Church Profile</a>
                    
                </ul>

                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{route('finance.create')}}"> Add Church Income</a>
                    </li>

                    <li class="list-group-item">
                        <a href="{{route('finance')}}"> Church Income</a>
                    </li>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{route('expense.create')}}"> Add Church Expense</a>
                    </li>

                    <li class="list-group-item">
                        <a href="{{route('expense.index')}}"> Church Expenses</a>
                    </li>
  
                </ul>
               
               </div>
               @endif
               <div class="col-lg-8">
                  @yield('content')
               </div>
            
            </div>

        </div>
        

        
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/toastr.min.js"></script>
    <script>
        @if(Session::has('success'))
        
           toastr.success("{{ Session::get('success') }}")

        @endif

        @if(Session::has('info'))
        
            toastr.info("{{ Session::get('info') }}")
        @endif

        @if(Session::has('danger'))
        
            toastr.danger("{{ Session::get('danger') }}")
        @endif
    </script>
</body>
</html>
