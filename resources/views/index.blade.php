@extends('layouts.index')

@section('javascript')

@endsection

@section('css')
  
@endsection


@section('content')
    <div>
        <nav>
            <div class="verticalNav"> {{-- Vertical navbar --}}
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
            <div class="horizontalNav"> {{-- Horizontal navbar --}}
                <ul class="nav">
                    <li class="nav-item">
                        <img src="{{ asset('images/header/glr.jpg') }}">
                    </li>
                    <li class="nav-item" id="logout">
                        <a class="nav-link" href="#">Loguit</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    @endsection
