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
        {!! Form::open(['method'=>'PATCH', 'action'=>['AssignmentsController@update', $assignment->id], 'class' => '']) !!}
        <div class="card">
            <div class="card-header">
              Update opdracht
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            Opdrachtnummer: <input class="form-control" type="text" name="number" value="{{$assignment->number}}" required placeholder="Opdrachtnummer">
                        </div>
                        <div class="form-group col-md-6">
                            Waarde: <input class="form-control" type="text" name="value" value="{{$assignment->value}}" required placeholder="Waarde">
                        </div>
                        <div class="form-group col-md-6">
                            Titel: <input class="form-control" type="text" name="title" value="{{$assignment->title}}" required placeholder="Titel">
                        </div>
                        <div class="form-group col-md-6">
                            Aantal uren: <input class="form-control" type="text" name="time" value="{{$assignment->time}}" required placeholder="Aantal uren">
                        </div>
                        <div class="form-group col-md-6">
                            Voorwaardelijk: <input class="form-control" type="text" value="{{$assignment->conditional}}" name="conditional" placeholder="Voorwaardelijk">
                        </div>
                        <div class="form-group col-md-6">
                          Info:
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                              <label class="custom-file-label" for="inputGroupFile04">Kies bestand</label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group col-md-6">
                            Korte beschrijving: <small class="form-text text-muted">Maximaal kan u 191 karakters gebruiken.</small>
                            <textarea class="form-control" type="text" name="shortDescription" placeholder="Korte beschrijving...">{{$assignment->shortDescription}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><p>Opdracht veranderen</p></button>
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
