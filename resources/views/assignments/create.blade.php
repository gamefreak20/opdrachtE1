@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
    <link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')

    <div class="row">
        <div class="col card">
            {!! Form::open(['method'=>'POST', 'action'=>['AssignmentsController@store'], 'class' => '']) !!}
            <div class="card">
                <div class="card-header">
                    Maak een opdracht aan
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="number" required placeholder="Nummer">
                            </div>
                            <div class="form-group col-md">
                                <input class="form-control" type="text" name="value" required placeholder="Waarde">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="title" required placeholder="Titel">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="shortDescription" required placeholder="Omschrijving">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="time" required placeholder="Tijd">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="text" name="conditional" placeholder="Voorwaardelijk">
                            </div>
                            <div class="form-group col-md-4">
                                <input class="form-control" type="file" name="file">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><p>Maak aan</p></button>
                    </blockquote>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>



@endsection
