@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')

    @if(count($errors->all()) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['method'=>'PATCH', 'action'=>['ClassesController@update', $class->id], 'class' => '']) !!}

        Naam: <input type="text" name="name" value="{{$class->name}}">
        <button type="submit">Verander</button>

    {!! Form::close() !!}

@endsection
