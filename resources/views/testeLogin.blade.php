@extends('layouts.layout')
@section('content')

    <div class="col z-depth-4 card-panel login">

        <form action="{{route('login')}}" method="post" class="col s6">
        {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s6 {{ $errors->has('email') ? ' has-error' : '' }}" >
                    <i class="material-icons prefix">account_circle</i>
                    <input type="email" name="email" id="email" class="validate">
                    <label for="email">E-mail</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div> 
            <div class="row ">    
                <div class="input-field col s6 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <i class="material-icons prefix">lock_outline</i>
                    <input type="password" name="password" id="password">
                    <label for="password">Senha</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="row">
               <div class="col s6">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Lembrar-me</label>
               </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <button class="btn waves-effect waves-light red" type="submit" name="action">Entrar
                        <i class="material-icons right">send</i>
                    </button>
                    <a class="btn-link" href="{{ route('password.request') }}">Esqueci minha senha</a>
                </div>
                
            </div>
           
        </form>
    </div>
    <div id="index-banner" class="parallax-container" style="background-size:cover;">

        <div class="parallax"><img src="https://images6.alphacoders.com/412/412086.jpg" alt="Unsplashed background img 1"></div>
    </div>
@endsection