@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')


    @if(count($errors->all()) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<div class="row">
  <div class="col card">
    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['ProfileController@update', $user->id], 'class' => 'postForm']) !!}
    <div class="card">
      <div class="card-header">
        Instellingen
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          naam: <input type="text" name="name" value="{{$user->name}}" required><br>
          email: <input type="email" name="email" value="{{$user->email}}" required><br>
          nieuw wachtwoord: <input type="password" name="newPassword"><br>
          herhaal wachtwoord: <input type="password" name="newPassword2"><br>

          * jouw wachtwoord: <input type="password" name="password" required><br>

          <button type="submit" class="btn btn-primary">Verander</button>
        </blockquote>
      </div>
    </div>
  </div>
</div>


    {!! Form::close() !!}

@endsection
