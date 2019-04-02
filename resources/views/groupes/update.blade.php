@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/groupes.js')}}"></script>
@endsection

@section('css')

@endsection


@section('content')

    {{-- Voeg een student toe, zoeken --}}
    @csrf
    Studenten naam: <input type="text" id="searchStudent"><br>
    Geselecteerde student<div id="selectedStudent"></div><br>
    <div id="showStudents"></div><br>


@endsection
