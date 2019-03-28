@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    <table>
        <thead>
            <tr>
                <th>Studenten nummer</th>
                <th>Naam</th>
                <th>Tussenvoegsel</th>
                <th>Achternaam</th>
                <th>Gemiddelde cijfer</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)

                <tr>
                    <td>{{$student->student_number}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->insertion}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>10</td>
                    <td>
                        <button onclick="window.location='{{route('student.edit', $student->id)}}';">Verander</button>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['StudentsController@destroy', $student->id], 'class' => '']) !!}

                            <button type="submit">Verwijder</button>

                        {!! Form::close() !!}
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    <button onclick="window.location='{{route('student.create')}}';">Maak aan</button>

@endsection
