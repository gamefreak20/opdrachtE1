@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>['ClassesController@store'], 'class' => '']) !!}

        Naam: <input type="text" name="name">
        <button type="submit">Maak aan</button>

    {!! Form::close() !!}

@endsection
