<!-- Maybe not needed -->
@extends('layouts.index')

@section('javascript')
    <script src="js/groupes.js"></script>
@endsection

@section('css')

@endsection


@section('content')

    @php($counter = 1)

    <table border="1">
        <thead>
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">Klas</th>
            <th scope="col">Bezig met een opdracht</th>
            <th scope="col">Aantal gemaakte opdrachten</th>
            <th scope="col">Eindcijfer</th>
            <th scope="col">Voortgang</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>{{$student->name}} {{$student->insertion}} {{$student->last_name}}</td>
                <td>{{$class}}</td>
                <td>{{$doingAssignment}}</td>
                <td>{{$totalAssignmentsDone}}</td>
                <td>{{$endGrade}}</td>
            </tr>
        </tbody>
    </table>

    <table border="1">
        <thead>
        <tr>
            <th scope="col">Opdracht nummer</th>
            <th scope="col">Opdracht naam</th>
            <th scope="col">Cijfer</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($groupes as $groupe)
            @php ($assignmentNumber = $groupe->assignment)
            @php($assignment = App\Assignment::where('number', '=', $assignmentNumber)->first())
            <tr>
                <td>{{$assignmentNumber}}</td>
                <td>{{$assignment->title}}</td>
                <td>{{$groupe->grade}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>


@endsection
