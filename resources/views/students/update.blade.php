@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

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

    {!! Form::open(['method'=>'PATCH', 'action'=>['StudentsController@update', $student->id], 'class' => '']) !!}

        Studenten nummer: <input type="number" name="student_number" value="{{$student->student_number}}">
        Naam: <input type="text" name="name" value="{{$student->name}}">
        Tussenvoegsel: <input type="text" name="insertion" value="{{$student->insertion}}">
        Achternaam: <input type="text" name="last_name" value="{{$student->last_name}}">
        <button type="submit">Verander</button>

    {!! Form::close() !!}

@endsection
