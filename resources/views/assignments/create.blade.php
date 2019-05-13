@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
    <link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
    <div class="col card">
        {!! Form::open(['method'=>'POST', 'action'=>['AssignmentsController@store'], 'files'=>true, 'class' => '']) !!}
        <div class="card">
            <div class="card-header">
                Maak een opdracht aan
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            Opdrachtnummer: <input class="form-control" type="text" name="number" required placeholder="Opdrachtnummer">
                        </div>
                        <div class="form-group col-md-6">
                            Waarde: <input class="form-control" type="text" name="value" required placeholder="Waarde">
                        </div>
                        <div class="form-group col-md-6">
                            Titel: <input class="form-control" type="text" name="title" required placeholder="Titel">
                        </div>
                        <div class="form-group col-md-6">
                            Aantal uren: <input class="form-control" type="text" name="time" required placeholder="Aantal uren">
                        </div>
                        <div class="form-group col-md-6">
                            Voorwaardelijk: <input class="form-control" type="text" name="conditional" placeholder="Voorwaardelijk">
                        </div>
                        <div class="form-group col-md-6">
                          Info:
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile04" name="infoFile" aria-describedby="inputGroupFileAddon04" required>
                              <label class="custom-file-label" for="inputGroupFile04">Kies bestand</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                            Korte beschrijving: <small class="form-text text-muted">Maximaal kan u 191 karakters gebruiken.</small>
                            <textarea class="form-control" type="text" name="shortDescription" placeholder="Korte beschrijving..."></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><p>Maak opdracht aan</p></button>
                </blockquote>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>



@endsection
