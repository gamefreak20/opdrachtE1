@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
  <div class="col card">
    {!! Form::open(['method'=>'POST', 'action'=>['ClassesController@store'], 'class' => '']) !!}
    <div class="card">
      <div class="card-header">
        Maak klas aan
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <div class="form-row">
            <div class="form-group col">
              <input class="form-control" type="text" name="name" placeholder="Klas naam...">
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
