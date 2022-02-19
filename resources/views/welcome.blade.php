@extends('layouts.app')
@section('title', 'PERSIB')
@section('css')
     <!-- Bootstrap CSS -->
     <link href={{asset("bs5/dist/css/bootstrap.min.css")}} rel="stylesheet">
     <link rel="stylesheet" href={{asset("css/navbar.css")}}>
     <link rel="stylesheet"  href={{asset("css/body.css")}}>
     <link rel="stylesheet"  href={{asset("css/responsive.css")}}>
@endsection
@section('content')
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-light mt-3 fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand">
                <img src={{asset("assets/logo.png")}} height="50px" width="50px" >
            </a>
            <h3 class="pt-2 font-weight-bold">PERSIB</h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a href="{{route('login')}}" class=" btn btn-primary rounded-pill tebel-sedang shadow" id="btn-sign">Get Started</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- konten -->
    <div class="container" >
        <br><br><br>

        <div class="row mt-5 mb-5 pt-6">

            <div class="col-lg-12 gambar">
                <img src={{asset("assets/10610.png")}} width="100%">
            </div>

            <div class="col-sm-12 position-relative p-4">
                <div class="position-absolute top-0 end-0">
                    <img src={{asset("assets/10610.png")}} class="img">
                </div>

                <h1 class="display-1 pt-5 text-truncate tebel-sedang judul1">Student</h1>
                <h1 class="display-1 text-truncate tebel-sedang judul1">Personality</h1>
                <div class="hr"></div>

                <div class="desc mt-4">
                    <p>The mapping student personality as a system for predicting student
                    behavior in schools in order to achieve a better generation</p>

                </div>
                <div class="mt-5">
                    {{-- <a href="{{route('login')}}" class="btn btn-primary rounded-pill shadow tebel-sedang">More Info</a> --}}
                </div>
            </div>

            <br>
        </div>
    </div>

@endsection
@section('js')
     <!-- Option 1: Bootstrap Bundle with Popper -->
     <script src={{asset("bs5/dist/js/bootstrap.bundle.js")}}></script>
     <script src={{asset("js/onscroll.js")}}></script>
@endsection




