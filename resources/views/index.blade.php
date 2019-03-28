@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
  <link href="{{asset('css/item.css')}}" rel="stylesheet">
@endsection

@section('content')

  <div class="row">
    <div class="col item">
      <a href="" class="hitbox">
        <h1 class="addItem">+</h1>
      </a>
    </div>
    <div class="col item">
      <a href="" class="hitbox">
      </a>
    </div>
  </div>
@endsection
