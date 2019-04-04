@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/groupes.js')}}"></script>
@endsection

@section('css')

@endsection


@section('content')

    {{-- Voeg een student toe, zoeken --}}
    @csrf
    <input type="hidden" name="groupe_id" value="{{$groupe_id}}" id="groupe_id">
    Studenten naam: <input type="text" id="searchStudent"><br>
    Geselecteerde student
    <table id="showStudents">

    </table>


@endsection
