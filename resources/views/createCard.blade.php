@extends('layouts.index')

@section('javascript')
  <script src="{{asset('js/createCard.js')}}"></script>
@endsection

@section('css')
  <link href="{{asset('css/item.css')}}" rel="stylesheet">
  <link href="{{asset('css/card.css')}}" rel="stylesheet">
  <link href="{{asset('css/createCard.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
  <input type="hidden" name="idSelected" id="idSelected"/>
  <div class="form-row">

    <div class="col item">
      <div class="form-group col-md">
        <div class="createCard" onclick="select(1)">
          <img src="{{ asset('images/cardCreate/scoreClasses.png') }}" alt="">
          <p>Gemiddelde cijfer alle klassen</p>
          <div class="allCards" id="1"></div>
        </div>
      </div>
    </div>

    <div class="col item">
      <div class="form-group col-md">
        <div class="createCard" onclick="select(2)">
          <img src="{{ asset('images/cardCreate/scoreClasses.png') }}" alt="">
          <p>Gemiddelde cijfer een klas</p>
          <div class="allCards" id="2"></div>
        </div>
      </div>
    </div>

  </div>
  <div class="form-row">

    <div class="col item">
      <div class="form-group col-md">
        <div class="createCard" onclick="select(3)">
          <img src="{{ asset('images/cardCreate/scoreClasses.png') }}" alt="">
          <p>Aantal gemaakte opdrachten van alle klassen</p>
          <div class="allCards" id="3"></div>
        </div>
      </div>
    </div>

    <div class="col item">
      <div class="form-group col-md">
        <div class="createCard" onclick="select(4)">
          <img src="{{ asset('images/cardCreate/scoreClasses.png') }}" alt="">
          <p>Aantal gemaakte opdrachten van een bepaalde klas</p>
          <div class="allCards" id="4"></div>
        </div>
      </div>
    </div>

  </div>
  <button type="submit" class="btn btn-primary" id="submitBtn"><p>Voeg kaart toe</p></button>
</div>
@endsection
