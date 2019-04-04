@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
  <div class="col card">
    {!! Form::open(['method'=>'POST', 'action'=>['StudentsController@store'], 'class' => '']) !!}
    <div class="card">
      <div class="card-header">
        Maak student aan
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <div class="form-row">
            <div class="form-group col-md-4">
              <input class="form-control" type="text" name="name" required placeholder="Voornaam">
            </div>
            <div class="form-group col-md">
              <input class="form-control" type="text" name="insertion" placeholder="Tussenvoegsel">
            </div>
            <div class="form-group col-md-4">
              <input class="form-control" type="text" name="last_name" required placeholder="Achternaam">
            </div>
          </div>
          <input class="form-control" type="number" name="student_number" required placeholder="Studentennummer">
          <button type="submit" class="btn btn-primary"><p>Maak aan</p></button>
        </blockquote>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>

@endsection
