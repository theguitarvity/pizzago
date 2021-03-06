<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','PizzaGo')}}</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" type="image/x-icon">
        <!-- Styles -->
        <link rel="stylesheet" href="style.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
       
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
 
       <link rel="stylesheet" href="{{asset('css/materialize-stepper.min.css')}}">
       
        

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <!-- Materializecss compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <!-- jQueryValidation Plugin -->
        <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
        <!--Import Materialize-Stepper JavaScript (after the jquery.validate.js and materialize.js) -->
       
       <!--SCRIPT-->
       <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.2/js/materialize.min.js"></script>
        <script src="{{asset('js/materialize-stepper.min.js')}}"></script>

        
    </head>
    <body class="body">
   
        <header>
            
            <nav class="nav-extended menu">
                <div class="nav-wrapper">
                
                <ul class="right hide-on-med-and-down">
                    @guest
                        <li><a href="{{route('login')}}">Entrar</a></li>
                        <li><a href="{{route('cadastro')}}">Cadastrar-se</a></li>
                    @else
                        <li><a>Ola, {{ Auth::user()->nomeUsuario }}</a></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        </li>
                        
                    @endguest
                    
                   
                </ul>
                </div>
                <div class="nav-content">
                    <span class="nav-title"style="margin-left:310px; font-weight:bold">Painel</span>
                    <a class="btn-floating btn-large halfway-fab waves-effect waves-light teal modal-trigger" data-target="modal1">
                        <i class="material-icons yellow">add</i>
                    </a>
                </div>
            </nav>
            <div class="container">
                <a href="#" class="button-collapse top-nav full hide-on-large-only" data-activates="nav-mobile">
                    <i class="material-icons">menu</i>
                </a>
            </div>
            <ul style="backgroun-color:#222;" class="side-nav fixed gray" id="nav-mobile" style="transform: translateX(0%);">
                <li>
                    <a href="/teste">
                        <img src="{{asset('img/logo4.png')}}" alt="logo" width="350" style="margin-left:-90px;">
                    </a>
                </li>
            </ul>
        </header>
        <div class="content">
        

            @yield('content')
        </div>
        
        
        <script>
            $(document).ready(function () {
                // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
                $('.modal-trigger').leanModal();
                
            });
            
        </script>
        <script>
            $(function(){
                $('.stepper').activateStepper();
            });
        </script>
    </body>
</html>