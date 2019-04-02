@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    <table border="1">
        <thead>
            <tr>
                <th>
                    Groep nummer
                </th>
                <th>
                    Studenten
                </th>
                <th>
                    Bezig met een opdracht
                </th>
                <th>
                    tools
                </th>
            </tr>
        </thead>
        <tbody>
        @php($oldGroupeNumber = null)
        @php($first = true)
            @foreach($groupes as $groupe)

                @if ($oldGroupeNumber == $groupe['groupe_id'])
                    @php($student = \App\Student::find($groupe['student_id']))
                    ,{{$student['name']}}
                @else
                    @if ($first)
                        @php($first = false)
                    @else
                        </td>
                        <td>
                            nee
                        </td>
                        <td>
                            <button onclick="window.location='{{route('groupe.edit', $groupe['groupe_id'])}}';">Verander</button>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['GroupesController@destroy', $groupe['groupe_id']], 'class' => '']) !!}

                                <button type="submit">Verwijder</button>

                            {!! Form::close() !!}
                        </td>
                        </tr>
                    @endif

                    <tr onclick="window.location='{{route('groupe.show', $groupe['groupe_id'])}}';">
                        <td>{{$groupe['groupe_id']}}</td>
                        <td>
                            @php($student = \App\Student::find($groupe['student_id']))
                            {{$student['name']}}

                @endif

                @php($oldGroupeNumber = $groupe['groupe_id'])

            @endforeach
                </td>
                <td>
                    nee
                </td>
                <td>
                    <button onclick="window.location='{{route('groupe.edit', $groupe['groupe_id'])}}';">Verander</button>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['GroupesController@destroy', $groupe['groupe_id']], 'class' => '']) !!}

                    <button type="submit">Verwijder</button>

                    {!! Form::close() !!}
                </td>
                </tr>
        </tbody>
    </table>

@endsection
