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
    {!! Form::open(['method'=>'PATCH', 'action'=>['GroupesController@update', $groupe->id], 'class' => '']) !!}
    <div class="card">
      <div class="card-header">
        Maak student aan
      </div>
      <div class="card-body">
        <blockquote class="blockquote mb-0">
          <input class="form-control" type="number" min="0" max="10" name="grade" value="{{$groupe->grade}}" step=".01" required placeholder="Cijfer">
          <textarea name="comment" placeholder="Opmerkingen...">{{$groupe->comment}}</textarea>
          <input class="form-control" type="number" name="student_number" required value="{{$student->student_number}}" placeholder="Studentennummer">
          <button type="submit" class="btn btn-primary"><p>Verander</p></button>
        </blockquote>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>


    {!! Form::open(['method'=>'PATCH', 'action'=>['GroupesController@update', $groupe->id], 'class' => '']) !!}

        Cijfer: <input type="number" min="0" max="10" name="grade" value="{{$groupe->grade}}" step=".01"><br>

        Opmerking: <textarea name="comment">{{$groupe->comment}}</textarea><br>

        {{-- Voeg een student toe, zoeken --}}
        Studenten in de groep:<br>
        <input type="text" id="studentNameSearch">
        <div id="searchStudentNameField"><p class='updateSelect'>Geen studenten gevonden</p></div>
        <div id="selectedStudents"></div>
        <input type="hidden" name="studentIds" id="studentIdsSelected">

        <input type="submit">

    {!! Form::close() !!}

@endsection

@section('lateScripts')
    @foreach($students as $student)
        <script type="text/javascript">
            addStudent2({{$student->id}});
        </script>
    @endforeach
@endsection
