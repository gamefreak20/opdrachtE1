@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['ProfileController@update', $user->id], 'class' => 'postForm']) !!}

        naam: <input type="text" name="name" value="{{$user->name}}" required><br>
        email: <input type="email" name="email" value="{{$user->email}}" required><br>
        nieuw wachtwoord: <input type="password" name="newPassword"><br>
        herhaal wachtwoord: <input type="password" name="newPassword2"><br>

        * jouw wachtwoord: <input type="password" name="password" required><br>

        <input type="submit">

    {!! Form::close() !!}

@endsection
