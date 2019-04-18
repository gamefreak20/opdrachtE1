<!-- Maybe not needed -->
@extends('layouts.index')

@section('javascript')
    <script src="js/groupes.js"></script>
@endsection

@section('css')
  <link href="{{asset('css/card.css')}}" rel="stylesheet">
  <link href="{{asset('css/studentDetail.css')}}" rel="stylesheet">
@endsection


@section('content')

    @php($counter = 1)

    <div class="row">
      <div class="col card">
        <div class="card">
          <div class="card-header">
            Student van klas {{$class}}
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Naam</th>
                  <th scope="col">klas</th>
                  <th scope="col">Bezig met een opdracht</th>
                  <th scope="col">Aantal gemaakte opdrachten</th>
                  <th scope="col">Eindcijfer</th>
                  <th scope="col">Bezig met opdracht</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="center">{{$student->name}} {{$student->insertion}} {{$student->last_name}}</td>
                  <td class="center">{{$class}}</td>
                  <td class="center">{{$doingAssignment}}</td>
                  <td class="center">{{$totalAssignmentsDone}}</td>
                  <td class="center">{{$endGrade}}</td>
                  <td class="center">{{$doingAssignment}}</td>
                </tr>
              </tbody>
            </table>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Opdracht nummer</th>
                  <th scope="col">Opdracht naam</th>
                  <th scope="col">Cijfer</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($groupes as $groupe)
                      @php ($assignmentNumber = $groupe->assignment)
                      @php($assignment = App\Assignment::where('number', '=', $assignmentNumber)->first())
                      <tr>
                          <td class="center">{{$assignmentNumber}}</td>
                          <td class="center">{{$assignment->title}}</td>
                          <td class="center">{{$groupe->grade}}</td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

@endsection
