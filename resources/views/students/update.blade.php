@extends('layouts.index')

@section('javascript')
<script src="{{asset('js/card.js')}}"></script>
@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
  <div class="col card">
    {!! Form::open(['method'=>'PATCH', 'action'=>['StudentsController@update', $student->id], 'class' => '']) !!}
    <div class="card">
      <div class="card-header">
        Maak student aan
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <div class="form-row">
            <div class="form-group col-md-4">
              <input class="form-control" type="text" name="name" required value="{{$student->name}}" placeholder="Voornaam">
            </div>
            <div class="form-group col-md">
              <input class="form-control" type="text" name="insertion" value="{{$student->insertion}}" placeholder="Tussenvoegsel">
            </div>
            <div class="form-group col-md-4">
              <input class="form-control" type="text" name="last_name" required value="{{$student->last_name}}" placeholder="Achternaam">
            </div>
          </div>
          <input class="form-control" type="number" name="student_number" required value="{{$student->student_number}}" placeholder="Studentennummer">
          <button type="submit" class="btn btn-primary"><p>Verander</p></button>
        </blockquote>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>

<div aria-live="polite" aria-atomic="true" style="min-height: 200px;">
  <!-- Position it -->
  <div style="position: absolute; top: 0; right: 0;">
    <!-- Then put toasts within -->
    @if(count($errors->all()) > 0)
      @foreach($errors->all() as $error)
        <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-autohide="false">
          <div class="toast-header">
            <svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#007aff"></rect>
              <rect width="100%" height="100%" fill="#ebf704"></rect>
            </svg>
            <strong class="mr-auto">Waarschuwing</strong>
            <small class="text-muted timeText"></small>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="toast-body">
            <p>{{$error}}</p>
          </div>
        </div>
        @endforeach
      @endif
  </div>
</div>

@endsection
