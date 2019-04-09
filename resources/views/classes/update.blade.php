@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/classes.js')}}"></script>
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

    {!! Form::open(['method'=>'PATCH', 'action'=>['ClassesController@update', $class->id], 'class' => '']) !!}

        Naam: <input type="text" name="name" value="{{$class->name}}">
        <button type="submit">Verander</button>

        <br>

        <input type="text" name="studentName" id="studentNameSearch">

        <div id="searchStudentNameField"></div>

        <div id="selectedStudents"></div>

        <input type="hidden" name="studentIdsSelected" id="studentIdsSelected">

    {!! Form::close() !!}

@endsection
