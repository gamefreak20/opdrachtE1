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
    {!! Form::open(['method'=>'PATCH', 'action'=>['GroupesController@update', $groupe->id], 'class' => '']) !!}
    <div class="card">
      <div class="card-header">
        Verander groep
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <div class="form-row">
            <div class="form-group col-md-8">
              Cijfer: <input class="form-control" type="number" min="0" max="10" name="grade" value="{{$groupe->grade}}" step=".01" required placeholder="Cijfer">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              Opmerkingen: <textarea class="form-control" name="comment" placeholder="Opmerkingen...">{{$groupe->comment}}</textarea>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              Voeg student toe aan groep: <input class="form-control" placeholder="student toevoegen aan groep..." type="text" id="studentNameSearch">
              <div id="searchStudentNameField"><p class='updateSelect'>Geen studenten gevonden</p></div>
            </div>
          </div>
          <input type="hidden" name="studentIds" id="studentIdsSelected">
          <button type="submit" id="change" class="btn btn-primary"><p>Verander</p></button>
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

@section('lateScripts')
    @foreach($students as $student)
        <script type="text/javascript">
            addStudent2({{$student->id}});
        </script>
    @endforeach
@endsection
