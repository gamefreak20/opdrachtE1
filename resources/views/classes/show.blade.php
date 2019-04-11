@extends('layouts.index')

@section('javascript')
    <script src="{{asset('js/classes.js')}}"></script>
@endsection

@section('css')
  <link href="{{asset('css/card.css')}}" rel="stylesheet">
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
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Studentnummer</th>
              <th scope="col">Naam</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
            <tr>
              <th scope="row">1</th>
              <td>{{$student->student_number}}</td>
              <td>{{$student->name}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
