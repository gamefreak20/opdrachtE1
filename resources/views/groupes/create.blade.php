@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/groupes.js')}}"></script>
@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
  <div class="col card">
    {!! Form::open(['method'=>'POST', 'action'=>'GroupesController@store', 'class' => '']) !!}
    <div class="card">
      <div class="card-header">
        Maak student aan
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <input class="form-control" type="text" name="assignment" required placeholder="Opdracht">
          <input class="form-control" type="number" name="totalHours" required placeholder="Aantal uren">
          <input class="form-control" type="number" name="student_number" required placeholder="Studentennummer">
          <button type="submit" class="btn btn-primary"><p>Maak aan</p></button>
        </blockquote>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>

<!-- Joey still working on this stuff || -->
<!--                                  \/-->

    {!! Form::open(['method'=>'POST', 'action'=>'GroupesController@store', 'class' => '']) !!}

        Opdracht: <input type="text" name="assignment"><br>
        Aantal uren: <input type="number" name="totalHours"><br>

        {{-- Voeg een student toe, zoeken --}}
        Studenten in de groep:<br>
        <input type="text" id="studentNameSearch2">
        <div id="searchStudentNameField"><p class='updateSelect'>Geen studenten gevonden</p></div>
        <div id="selectedStudents"></div>
        <input type="hidden" name="studentIds" id="studentIdsSelected">

        <input type="submit">

    {!! Form::close() !!}

@endsection
