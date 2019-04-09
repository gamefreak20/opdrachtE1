@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    <table>
        <thead>
            <tr>
                <th>Naam</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)

                <tr>
                    <td>{{$class->name}}</td>
                    <td>
                        <button onclick="window.location='{{route('classes.show', $class->id)}}';">Bekijk</button>
                        <button onclick="window.location='{{route('classes.edit', $class->id)}}';">Verander</button>
                        {!! Form::open(['method'=>'DELETE', 'action'=>['ClassesController@destroy', $class->id], 'class' => '']) !!}

                            <button type="submit">Verwijder</button>

                        {!! Form::close() !!}
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

    <button onclick="window.location='{{route('classes.create')}}';">Maak aan</button>

@endsection
