@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/classes.js')}}"></script>
@endsection

@section('css')

@endsection


@section('content')

    <table border="1">
        <thead>
            <tr>
                <th>Studenten nummer</th>
                <th>Naam</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$student->student_number}}</td>
                    <td>{{$student->name}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
