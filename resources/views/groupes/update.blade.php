@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/groupes.js')}}"></script>
@endsection

@section('css')

@endsection


@section('content')

    {!! Form::open(['method'=>'PATCH', 'action'=>['GroupesController@update', $groupe->id], 'class' => '']) !!}

        Cijfer: <input type="number" min="0" max="10" name="grade" placeholder="{{$groupe->grade}}" step=".01"><br>

        Opmerking: <textarea name="comment"></textarea><br>

        {{-- Voeg een student toe, zoeken --}}
        Studenten in de groep:<br>
        <input type="text" id="studentNameSearch">
        <div id="searchStudentNameField"><p class='updateSelect'>Geen studenten gevonden</p></div>
        <div id="selectedStudents"></div>
        <input type="hidden" name="studentIds" id="studentIdsSelected">

        <input type="submit">

    {!! Form::close() !!}

@endsection
