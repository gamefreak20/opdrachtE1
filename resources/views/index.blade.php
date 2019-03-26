@extends('layouts.index')

@section('javascript')

@endsection

@section('css')

@endsection


@section('content')
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
    @endsection
