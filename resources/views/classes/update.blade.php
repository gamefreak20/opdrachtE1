@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/classes.js')}}"></script>
@endsection

@section('css')
<link href="{{asset('css/card.css')}}" rel="stylesheet">
<link href="{{asset('css/class.css')}}" rel="stylesheet">
@endsection


@section('content')

<div class="row">
  <div class="col card">
    <div class="card">
      <div class="card-header">
        Studenten van klas {{$class->name}}
        <form class="form-inline my-2 my-lg-0 searchArea">
         <input class="form-control mr-sm-2" type="search" placeholder="Zoek student(en)..." aria-label="searchStudent">
       </form>
      </div>
      <div class="card-body">

        <blockquote class="blockquote mb-0">
          {!! Form::open(['method'=>'PATCH', 'action'=>['ClassesController@update', $class->id], 'class' => '']) !!}
          <div class="form-row">
            <div class="form-group col-md-8">
              Klas naam: <input class="form-control" type="text" name="name" value="{{$class->name}}">
            </div>
            <div class="form-group col-md-4">
              <button class="btn btn-primary" type="submit">Verander</button>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-8">
              Voeg student toe aan klas: <input class="form-control" type="text" name="studentName" id="studentNameSearch" placeholder="student toevoegen...">
            </div>
          </div>
          <div id="searchStudentNameField"><p class='updateSelect'>Geen studenten gevonden</p></div>
          <input type="hidden" name="studentIdsSelected" id="studentIdsSelected">
          {!! Form::close() !!}
        </blockquote>
        <table class="table table-striped updateTable">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Studenten van klas</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><div id="selectedStudents"></div></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

    @if(count($errors->all()) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
