@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/groupes.js')}}"></script>
@endsection

@section('css')

@endsection


@section('content')

    {!! Form::open(['method'=>'POST', 'action'=>'GroupesController@store', 'class' => '']) !!}

        Opdracht: <input type="text" name="assignment"><br>
        Aantal uren: <input type="number" name="totalHours"><br>

        {{-- Voeg een student toe, zoeken --}}
        Studenten in de groep:<br>
        <input type="text" id="studentNameSearch2">
        <div id="searchStudentNameField"><p class='updateSelect'>Geen studenten gevonden</p></div>
        <div id="selectedStudents"></div>
        <input type="hidden" name="studentIds" id="studentIdsSelected">

        <input type="submit">

    {!! Form::close() !!}

@endsection
