<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
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
                          <a class="nav-link" href="#"><p>Home</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><p>Studenten</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><p>Klas</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><p>Opdrachten</p></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#"><p>Groepen</p></a>
                      </li>
                  </ul>
                  <div class="profileNav">
                      <ul class="nav" id="nameNav">
                          <li class="nav-item">
                              <a class="nav-link" href="#"><p>John Doe</p></a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#" id="imgRight"><img src="{{ asset('images/header/gear.png') }}" width="50"></a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="horizontalNav"> {{-- Horizontal navbar --}}
              <ul class="nav">
                  <li class="nav-item">
                      <img src="{{ asset('images/header/glr.jpg') }}" width="100">
                  </li>
                  <li class="nav-item" id="logout">
                      <a class="nav-link" href="#"><p>Loguit</p></a>
                  </li>
              </ul>
          </div>
      </nav>
      <div class="mainDiv">

    @yield('content')

      </div>

  </body>
  </html>
