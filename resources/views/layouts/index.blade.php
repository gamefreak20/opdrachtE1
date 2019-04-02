<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>--}}

        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.bundle.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      @yield('javascript')
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
      @yield('css')

  </head>
  <body>

      <nav>
          <div class="verticalNav"> {{-- Vertical navbar --}}
              <div>
                  <ul class="nav flex-column" id="verticalNav">
                      <li class="nav-item">
                          <h3>Menu</h3>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('index')}}"><p>Home</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('student.index')}}"><p>Studenten</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('classes.index')}}"><p>Klas</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('assignments.index')}}"><p>Opdrachten</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{route('groupe.index')}}"><p>Groepen</p></a>
                      </li>
                  </ul>
                  <div class="profileNav">
                      <ul class="nav" id="nameNav">
                          <li class="nav-item">
                            <p>{{\Illuminate\Support\Facades\Auth::user()->name}}</p>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="{{route('profile.index')}}" id="imgRight"><img src="{{ asset('images/header/gear.png') }}" width="50"></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="horizontalNav"> {{-- Horizontal navbar --}}
              <ul class="nav" id="horizontalNav">
                  <li class="nav-item">
                      <img src="{{ asset('images/header/glr.jpg') }}" width="100">
                  </li>
                  <li class="nav-item" id="logout">
                      <a class="nav-link" href="{{url('/logoutLink')}}"><p>Loguit</p></a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="mainDiv">

        @yield('content')

      </div>

  </body>
  </html>
