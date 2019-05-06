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
      <a href="createCard" class="hitbox">
        <h1 class="addItem">+</h1>
      </a>
    </div>
      @foreach($data as $name => $thisData)
        <div class="col item">
          <span><a href=""><p class="delete">Delete</p></a></span>
            <a href="" class="hitbox">
              <canvas id="{{$name}}" width="800" height="400"></canvas>
            </a>
        </div>
      @endforeach
  </div>

@endsection

@section('lateScripts')
    <script>
        $(document).ready(function()
        {
                @foreach($data as $name => $thisData)
                    var ctx = document.getElementById('{{$name}}').getContext('2d');
                    gradient = ctx.createLinearGradient(0, 0, 0, 400);
                    gradient.addColorStop(0, '#E8F8CF');
                    gradient.addColorStop(1, '#A5E247');
                    var myLineChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                    labels: ['{{$date[4]}}-{{$date[0]}}', '{{$date[3]}}-{{$date[0]}}', '{{$date[2]}}-{{$date[0]}}', '{{$date[1]}}-{{$date[0]}}'],
                    datasets: [{
                    data: [{{$thisData['data'][3]}}, {{$thisData['data'][2]}}, {{$thisData['data'][1]}}, {{$thisData['data'][0]}}],
                    backgroundColor : gradient,
                    borderColor: "#A5E247",
                    pointColor: "#A5E247",
                    borderWidth: 2,
                    label: '{{$name}}'
                    }]
                    },
                    options: {

                    }
                    });
                @endforeach
        })
    </script>
@endsection
