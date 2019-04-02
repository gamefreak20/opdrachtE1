@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    @php($counter = 0)

    <table border="1">
        <thead>
        <tr>
            <th>#</th>
            <th>naam</th>
            <th>tools</th>
        </tr>
        </thead>
        <tbody>
        @foreach($groupe as $group)
            @php($counter++)
            <tr>
                <td>{{$counter}}</td>
                <td>{{\App\Student::find($group['student_id'])['name']}}</td>
                <td>
                    {{--<button onclick="window.location='{{route('groupe.deleteStudent', $group['id'])}}';">Voeg een student toe</button>--}}
                    {{--{!! Form::open(['method'=>'DELETE', 'action'=>['GroupesController@destroy', $groupe['groupe_id']], 'class' => '']) !!}--}}

                    {{--<button type="submit">Verwijder student uit groep</button>--}}

                    {{--{!! Form::close() !!}--}}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

@endsection
