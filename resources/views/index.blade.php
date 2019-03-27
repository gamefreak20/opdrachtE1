@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
  <link href="{{asset('css/item.css')}}" rel="stylesheet">
@endsection

@section('content')

  <div class="row">
    <div class="col item">
      1 of 3
    </div>
    <div class="col item">
      2 of 3
    </div>
    <div class="col item">
      3 of 3
    </div>
  </div>
@endsection
