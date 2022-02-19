@extends('layouts.app')
@section('title', 'PERSIB - Kuisioner')
@section('css')
     <!-- Custom fonts for this template-->
     <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href={{asset("css/sb-admin-2.min.css")}} rel="stylesheet">
     <link href={{asset("css/kuis.css")}} rel="stylesheet">

     <style>
         a.disabled {
            pointer-events: none;
            cursor: default;
        }
     </style>
@endsection
@section('content')

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="navbar">

    <a class="navbar-brand">
        <img src={{asset("assets/logo.png")}} height="50px" width="50px" >
    </a>
    <h3 class="pt-2 font-weight-bold">PERSIB</h3>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name}}</span>
                <img class="img-profile rounded-circle"
                    src={{asset("img/undraw_profile.svg")}}>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Logout</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Topbar -->

<div class="kuisoner">
    <div class="container">
        <div class="title text-center">
            <h1>Kuisioner</h1>
            <p>Kuisioner pemetaan kepribadian siswa baru sebagai sistem prediksi perilaku di sekolah</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <img src="{{asset('assets/img3.png')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Gaya Belajar </h5>
                        <p class="card-text">Suatu teknik belajar yang menonjol dan digunakan seseorang dalam menyerap informasi</p>
                        @if ($gayaBelajar != null)
                            <a href="" class="disabled text-center">Selesai</a>
                        @else
                            <a href="{{route('kuisoner.gb')}}">Mulai</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <img src="{{asset('assets/img2.png')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Dominasi Otak </h5>
                        <p class="card-text">Pembagian cara berpiir seseorang berdasarkan dominasi otaknya, yaitu otak kanan dan otak kiri</p>
                        @if ($dominasiOtak != null)
                            <a href="" class="text-center disabled">Selesai</a>
                        @else
                            <a href="{{route('kuisoner.do')}}" class="text-center">Mulai</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card text-center">
                    <img src="{{asset('assets/img1.png')}}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title text-center">Kesehatan mental dan emosional</h5>
                        <p class="card-text">Kondisi seseoang yang dapat dilihat dari cara berperilaku,tutur bahasa dan keadaan lingkungan</p>
                        @if ($kesehatanMental != null)
                            <a  href="" class="text-center disabled">Selesai</a>
                        @else
                            <a href="{{route('kuisoner.kme')}}" class="text-center">Mulai</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('js')
     <!-- Bootstrap core JavaScript-->
     <script src={{asset("vendor/jquery/jquery.min.js")}}></script>
     <script src={{asset("vendor/bootstrap/js/bootstrap.bundle.min.js")}}></script>

     <!-- Core plugin JavaScript-->
     <script src={{asset("vendor/jquery-easing/jquery.easing.min.js")}}></script>

     <!-- Custom scripts for all pages-->
     <script src={{asset("js/sb-admin-2.min.js")}}></script>

     <!-- Page level plugins -->
     <script src={{asset("vendor/chart.js/Chart.min.js")}}></script>

     <!-- Page level custom scripts -->
     <script src={{asset("js/demo/chart-area-demo.js")}}></script>
     <script src={{asset("js/demo/chart-pie-demo.js")}}></script>

     {{-- onscrol nav --}}
     <script src={{asset("js/onscroll-navbar.js")}}></script>

@endsection

