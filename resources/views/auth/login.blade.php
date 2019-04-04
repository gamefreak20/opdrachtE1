@extends('layouts.app')

@section('content')
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/card.css')}}" rel="stylesheet">
<link href="{{asset('css/login.css')}}" rel="stylesheet">

<div class="row">
  <div class="col card">
    <div class="card">
      <div class="card-header">
        Inloggen
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <form method="POST" action="{{ route('login') }}">
              @csrf
            E-mail<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="E-mail">

            Wachtwoord<input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Wachtwoord">
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            <span><input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><p> Wachtwoord onthouden</p></span>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Wachtwoord vergeten?') }}
                </a>
            @endif
          </form>
        </blockquote>
      </div>
    </div>
  </div>
</div>

@endsection
