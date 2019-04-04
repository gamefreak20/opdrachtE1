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

                @php ( isset($newGroupeId) ? $newGroupeId = $newGroupeId : $newGroupeId = $groupe->groupe_id )

                @if ($oldGroupeNumber == $groupe->groupe_id)
                    @php($student = \App\Student::find($groupe->student_id))
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
                            <button onclick="window.location='{{route('groupe.edit', $newGroupeId)}}';">Verander</button>
                            {!! Form::open(['method'=>'DELETE', 'action'=>['GroupesController@destroy', $newGroupeId], 'class' => '']) !!}

                                <button type="submit">Verwijder</button>

                            {!! Form::close() !!}
                        </td>
                        </tr>
                    @endif
                    @php($newGroupeId = $groupe->groupe_id)
                    <tr>
                        <td onclick="window.location='{{route('groupe.show', $groupe->groupe_id)}}';">{{$groupe->groupe_id}}</td>
                        <td onclick="window.location='{{route('groupe.show', $groupe->groupe_id)}}';">
                            @php($student = \App\Student::find($groupe->student_id))
                            {{$student['name']}}

                @endif

                @php($oldGroupeNumber = $groupe->groupe_id)

            @endforeach
                </td>
                <td>
                    nee
                </td>
                <td>
                    <button onclick="window.location='{{route('groupe.update', $groupe->groupe_id)}}';">Verander</button>
                    {!! Form::open(['method'=>'DELETE', 'action'=>['GroupesController@destroy', $groupe->groupe_id], 'class' => '']) !!}

                    <button type="submit">Verwijder</button>

                    {!! Form::close() !!}
                </td>
                </tr>
        </tbody>
    </table>

    <button onclick="window.location='{{route('groupe.create')}}';">Maak een groep aan</button>

@endsection
