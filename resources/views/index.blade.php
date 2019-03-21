<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        {{-- Fonts --}}
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">

        {{-- Stylesheet --}}
        <link href="{{asset('css/style.css')}}">

        {{-- Bootstrap --}}
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div>
            <nav>
                <div> {{-- Vertical navbar --}}
                    <div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Studenten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Klas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Opdrachten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Groepen</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">John Doe</a>
                                <img src="{{ asset('images/header/glr.jpg') }}">
                            </li>
                        </ul>
                    </div>
                </div>
                <div> {{-- Horizontal navbar --}}
                    <ul class="nav">
                        <li class="nav-item">
                            <img src="{{ asset('images/header/glr.jpg') }}">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Loguit</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </body>
</html>