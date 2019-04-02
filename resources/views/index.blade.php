@extends('layouts.index')

@section('javascript')
  <script src="{{asset('js/chart.js')}}"></script>
@endsection

@section('css')
  <link href="{{asset('css/item.css')}}" rel="stylesheet">
@endsection

@section('content')

  <div class="row">
    <div class="col item">
      <span><p class="delete">Delete</p></span>
      <a href="" class="hitbox">
        <h1 class="addItem">+</h1>
      </a>
    </div>
    <div class="col item">
      <span><p class="delete">Delete</p></span>
      <a href="" class="hitbox">
        <canvas id="myChart" width="800" height="400"></canvas>
      </a>
    </div>
  </div>
@endsection
