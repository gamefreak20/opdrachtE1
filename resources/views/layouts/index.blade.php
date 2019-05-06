<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>--}}

        <link rel="icon" type="image/ico" sizes="32x32" href="{{asset('images/header/favicon.ico')}}"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
      @yield('css')

  </head>
  <body>

      <nav>
        <span id="hamburger"><svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/></svg></span>
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
                              <a class="nav-link" href="{{route('profile.index')}}" id="imgRight">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29.955 29.994">
                                  <path id="iconfinder_icon-ios7-gear_211751" class="cls-1" d="M92.151,75.909H90.964a1.826,1.826,0,0,1-1.78-1.827,1.709,1.709,0,0,1,.586-1.288l.765-.75a1.918,1.918,0,0,0,0-2.725l-1.741-1.726a1.982,1.982,0,0,0-2.733,0l-.734.734a1.764,1.764,0,0,1-1.328.6,1.826,1.826,0,0,1-1.835-1.773V65.96A1.952,1.952,0,0,0,80.25,64H77.876a1.94,1.94,0,0,0-1.905,1.96v1.187a1.826,1.826,0,0,1-1.835,1.773,1.746,1.746,0,0,1-1.3-.578l-.757-.75a1.924,1.924,0,0,0-1.367-.547,1.972,1.972,0,0,0-1.367.547L67.592,69.31a1.923,1.923,0,0,0,0,2.717l.734.734a1.768,1.768,0,0,1,.609,1.32,1.82,1.82,0,0,1-1.78,1.827H65.968A1.935,1.935,0,0,0,64,77.806V80.18a1.94,1.94,0,0,0,1.968,1.9h1.187a1.826,1.826,0,0,1,1.78,1.827,1.768,1.768,0,0,1-.609,1.32l-.734.726a1.923,1.923,0,0,0,0,2.718L69.333,90.4a1.924,1.924,0,0,0,1.367.547,1.972,1.972,0,0,0,1.367-.547l.757-.75a1.733,1.733,0,0,1,1.3-.578,1.826,1.826,0,0,1,1.835,1.773v1.187a1.947,1.947,0,0,0,1.913,1.96h2.374a1.94,1.94,0,0,0,1.905-1.96V90.847a1.814,1.814,0,0,1,3.163-1.171l.734.734a1.982,1.982,0,0,0,2.733,0l1.741-1.734a1.932,1.932,0,0,0,0-2.725l-.765-.75a1.721,1.721,0,0,1-.586-1.288,1.82,1.82,0,0,1,1.78-1.827h1.187a1.816,1.816,0,0,0,1.819-1.9V77.806A1.794,1.794,0,0,0,92.151,75.909ZM85.3,78.993h0a6.247,6.247,0,1,1-12.494,0h0a6.247,6.247,0,0,1,12.494,0Z" transform="translate(-64 -64)"/>
                                </svg>
                              </a>
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

      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.bundle.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="{{asset('js/menu.js')}}"></script>

      @yield('javascript')

        @yield('lateScripts')

  </body>
  </html>
