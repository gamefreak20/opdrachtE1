@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/groupes.js')}}"></script>
@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
<link href="{{asset('css/class.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
  <div class="col card">
    {!! Form::open(['method'=>'POST', 'action'=>'GroupesController@store', 'class' => '']) !!}
    <div class="card">
      <div class="card-header">
        Maak groep aan
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <div class="form-row">
            <div class="form-group col-md-8">
              <input class="form-control" type="text" name="assignment" required placeholder="Opdracht">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              <input class="form-control" type="number" name="totalHours" required placeholder="Aantal uren">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              Voeg student toe aan groep: <input class="form-control" placeholder="student toevoegen aan groep..." type="text" id="studentNameSearch2">
              <div id="searchStudentNameField"><p class='updateSelect'>Geen studenten gevonden</p></div>
            </div>
          </div>
          <input type="hidden" name="studentIds" id="studentIdsSelected">
          <button type="submit" id="change" class="btn btn-primary"><p>Maak Groep aan</p></button>
        </blockquote>
        {!! Form::close() !!}
        <table class="table table-striped updateTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Studenten van groep</th>
              <th scope="col">Acties</th>
            </tr>
          </thead>
          <tbody id="selectedStudents">
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
