@extends('layouts.index')

@section('javascript')
<script src="{{asset('js/card.js')}}"></script>
@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
  <div class="col card">
    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['ProfileController@update', $user->id], 'class' => 'postForm']) !!}
    <div class="card">
      <div class="card-header">
        Instellingen
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <p>naam: <input type="text" class="form-control" name="name" value="{{$user->name}}" required><br>
          <p>email: <input type="email" class="form-control" name="email" value="{{$user->email}}" required></p><br>
          <p>nieuw wachtwoord: <input type="password" class="form-control" name="newPassword"></p><br>
          <p>herhaal wachtwoord: <input type="password" class="form-control" name="newPassword2"></p><br>

          <p>* jouw wachtwoord: <input type="password" class="form-control" name="password" required></p><br>

          <button type="submit" class="btn btn-primary"><p>Verander</p></button>
        </blockquote>
      </div>
    </div>
  </div>
</div>

<div aria-live="polite" aria-atomic="true" style="min-height: 200px;">
  <!-- Position it -->
  <div style="position: absolute; top: 0; right: 0;">

    <!-- Then put toasts within -->
    @if(count($errors->all()) > 0)
      @foreach($errors->all() as $error)
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
          <div class="toast-header">
            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#007aff"></rect>
              <rect width="100%" height="100%" fill="#ebf704"></rect>
            </svg>
            <strong class="mr-auto">Waarschuwing</strong>
            <small class="text-muted timeText"></small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            <p>{{$error}}</p>
          </div>
        </div>
        @endforeach
      @endif
  </div>
</div>

{{--<div class="row">--}}
  {{--<div class="col card">--}}
    {{--{!! Form::model($user, ['method'=>'PATCH', 'action'=>['ProfileController@update', $user->id], 'class' => 'postForm']) !!}--}}
    {{--<div class="card">--}}
      {{--<div class="card-header">--}}
        {{--Instellingen--}}
      {{--</div>--}}
      {{--<div class="card-body">--}}
        {{--<blockquote class="blockquote mb-0">--}}
          {{--naam: <input type="text" name="name" value="{{$user->name}}" required><br>--}}
          {{--email: <input type="email" name="email" value="{{$user->email}}" required><br>--}}
          {{--nieuw wachtwoord: <input type="password" name="newPassword"><br>--}}
          {{--herhaal wachtwoord: <input type="password" name="newPassword2"><br>--}}

          {{--* jouw wachtwoord: <input type="password" name="password" required><br>--}}

          {{--<button type="submit" class="btn btn-primary">Verander</button>--}}
        {{--</blockquote>--}}
      {{--</div>--}}
    {{--</div>--}}
  {{--</div>--}}
{{--</div>--}}

    {!! Form::close() !!}

@endsection
