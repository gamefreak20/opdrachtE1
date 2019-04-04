@extends('layouts.app')

@section('content')
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/card.css')}}" rel="stylesheet">
<link href="{{asset('css/login.css')}}" rel="stylesheet">

<div class="row">
  <div class="col card">
    <form method="POST" action="{{ route('password.email') }}">
      @csrf
    <div class="card">
      <div class="card-header">
        {{ __('Reset Password') }}
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
              E-mail<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-mail">
              @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          <button type="submit" class="btn btn-primary">
              {{ __('Send Password Reset Link') }}
          </button>
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
        </blockquote>
      </div>
    </div>
    </form>
  </div>
</div>


@endsection
