@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/groupes.js')}}"></script>
@endsection

@section('css')

@endsection


@section('content')

    {{-- Voeg een student toe, zoeken --}}
    <input type="text" id="studentNameSearch">
    <div id="searchStudentNameField"></div>
    <div id="selectedStudents"></div>
    <input type="hidden" id="studentIdsSelected">

@endsection
