@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>['StudentsController@store'], 'class' => '']) !!}

        Studenten nummer: <input type="number" name="student_number">
        Naam: <input type="text" name="name">
        Tussenvoegsel: <input type="text" name="insertion">
        Achternaam: <input type="text" name="last_name">
        <button type="submit">Maak aan</button>

    {!! Form::close() !!}

@endsection
