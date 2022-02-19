@extends('layouts.app')
@section('title', 'kuisioner - Gaya Belajar')
@section('css')
     <!-- Custom fonts for this template-->
     <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href={{asset("css/sb-admin-2.min.css")}} rel="stylesheet">
     <link href={{asset("css/kuisioner.css")}} rel="stylesheet">
@endsection
@section('content')
     <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="demo1Navbar">
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

    <section id="kuisioner">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12">
                    <div class="card shadow mb-12 mb-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Petunjuk Pengisian Gaya Belajar</h6>
                        </div>
                        <div class="card-body">
                            <div>1. Tidak ada jawaban yang benar, cukup jawab dengan sejujur-jujurnya sesuai dengan kondisi yang kamu alami 6 bulan terkahir</div>
                            <div>2. Untuk setiap prtanyaan, beri tanda (klik) pada pilihan tidak pernah,kadang-kadang,atau selalu</div>
                            <div class="pt-2">Keterangan Jawaban :</div>
                            <div>Tidak Pernah : Tidak melakukan sama sekali</div>
                            <div>Kadang-kadang : Kandang melakukan kadang tidak</div>
                            <div>Selalu : Terus menerus melakukan</div>
                        </div>
                    </div>

                     <!-- Basic Card Example -->
                     <div class="card shadow mb-12">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Form Kuisoner Gaya Belajar</h6>
                        </div>
                        <form action="{{route('gaya.belajar')}}" method="POST">
                            @csrf
                            <div class="card-body ">
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb1" >1. Suka mengingat sesuatu dengan membayangkannya</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb1" id="tidak_pernah1" value="1" {{(old('gb1') == '1') ? 'checked' : ''}} >
                                            <label class="form-check-label" for="tidak_pernah1" >
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb1" id="kadang-kadang1" value="2" {{(old('gb1') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang1">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb1" id="selalu1" value="3"  {{(old('gb1') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu1">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb2" >2. Memahami sesuatu dengan melihat grafik/bagan/skema atau membaca tulisan</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb2" id="tidak_pernah2" value="1" {{(old('gb2') == '1') ? 'checked' : ''}} >
                                            <label class="form-check-label" for="tidak_pernah2">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb2" id="kadang-kadang2" value="2" {{(old('gb2') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang2">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb2" id="selalu2" value="3" {{(old('gb2') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu2">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb3" >3. Memahami sesuatu dari mendengar/petunjuk lisan</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb3" id="tidak_pernah3" value="1" {{(old('gb3') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah3">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb3" id="kadang-kadang3" value="2" {{(old('gb3') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang3">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb3" id="selalu3" value="3" {{(old('gb3') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu3">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb4" >4. Mudah mengikuti instruksi tertulis</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb4" id="tidak_pernah4" value="1" {{(old('gb4') == '1') ? 'checked' : ''}} >
                                            <label class="form-check-label" for="tidak_pernah4">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb4" id="kadang-kadang4" value="2" {{(old('gb4') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang4">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb4" id="selalu4" value="3" {{(old('gb4') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu4">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb5" >5.Bisa mengerjakan grafik, bagan/skema dan poster dengan baik</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb5" id="tidak_pernah5" value="1" {{(old('gb5') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah5">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb5" id="kadang-kadang5" value="2" {{(old('gb5') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang5">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb5" id="selalu5" value="3" {{(old('gb5') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu5">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb6" >6. Senang melakukan tugas di dikte</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb6" id="tidak_pernah6" value="1" {{(old('gb6') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah6">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb6" id="kadang-kadang6" value="2" {{(old('gb6') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang6">
                                                Kadang-kadang
                                            </label>
                                         </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb6" id="selalu6" value="3" {{(old('gb6') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu6">
                                                Selalu
                                            </label>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb7" >7. Saya dapat menyusun bongkar pasang gambar (puzzle) dengan baik</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb7" id="tidak_pernah7" value="1" {{(old('gb7') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah7">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb7" id="kadang-kadang7" value="2" {{(old('gb7') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang7">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb7" id="selalu7" value="3" {{(old('gb7') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu7">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb8" >8. Senang membaca</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb8" id="tidak_pernah8" value="1" {{(old('gb8') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah8">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb8" id="kadang-kadang8" value="2" {{(old('gb8') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang8">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb8" id="selalu8" value="3" {{(old('gb8') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu8">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb9">9. Mudah memahami penjelasan dengan alat peraga</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb9" id="tidak_pernah9" value="1" {{(old('gb9') == '1') ? 'checked' : ''}} >
                                            <label class="form-check-label" for="tidak_pernah9">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb9" id="kadang-kadang9" value="2" {{(old('gb9') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang9">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb9" id="selalu9" value="3" {{(old('gb9') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu9">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb10">10. Suka mencatat dan membuat daftar apa yang ingin saya ingat</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb10" id="tidak_pernah10" value="1" {{(old('gb10') == '1') ? 'checked' : ''}} >
                                            <label class="form-check-label" for="tidak_pernah10">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb10" id="kadang-kadang10" value="2" {{(old('gb10') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang10">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb10" id="selalu10" value="3" {{(old('gb10') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu10">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb11" >11. Mudah mengikuti pentunjuk di peta</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb11" id="tidak_pernah11" value="1" {{(old('gb11') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah11">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb11" id="kadang-kadang11" value="2" {{(old('gb11') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang11">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb11" id="selalu11" value="3" {{(old('gb11') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu11">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb12">12. Suka mengikuti petunjuk lisan</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb12" id="tidak_pernah12" value="1" {{(old('gb12') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah12">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb12" id="kadang-kdang12" value="2" {{(old('gb12') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kdang12">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb12" id="selalu12" value="3" {{(old('gb12') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu12">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb13" >13. Suka mendengar seseorang bicara dalam mendapatkan informasi</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb13" id="tidak_pernah13" value="1" {{(old('gb13') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah13">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb13" id="kadang-kadang13" value="2" {{(old('gb13') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang13">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb13" id="selalu13" value="3" {{(old('gb13') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu13">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb14" >14. Membutuhkan penjelesan tentang suatu digram atau peta</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb14" id="tidak_pernah14" value="1" {{(old('gb14') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah14">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb14" id="kadang-kadang14" value="2" {{(old('gb14') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang14">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb14" id="selalu14" value="3" {{(old('gb14') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu14">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb15">15. Senang berdiskusi membicarakan suatu hal</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb15" id="tidak_pernah15" value="1" {{(old('gb15') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah15">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb15" id="kadang-kadang15" value="2" {{(old('gb15') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang15">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb15" id="selalu15" value="3" {{(old('gb15') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu15">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb16" >16. Suka mendengarkan irama musik untuk mempelajari sesuatu</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb16" id="tidak_pernah16" value="1" {{(old('gb16') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah16">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb16" id="kadang-kadang16" value="2" {{(old('gb16') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang16">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb16" id="selalu16" value="3" {{(old('gb16') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu16">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb17">17. Suka mendengar musik</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb17" id="tidak_pernah17" value="1" {{(old('gb17') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah17">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb17" id="kadang-kadang17" value="2" {{(old('gb17') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang17">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb17" id="selalu17" value="3" {{(old('gb17') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu17">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb18" >18. Suka melalukan gerakan-gerakan untuk mengingat sesuatu (mengetuk-ngetuk pena, mneggoyang-goyang tungkai)</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb18" id="tidak_pernah18" value="1" {{(old('gb18') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah18">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb18" id="kadang-kadang18" value="2" {{(old('gb18') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang18">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb18" id="selalu18" value="3" {{(old('gb18') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu18">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb19" >19. Suka bekerja dengan tangan saya dalam membuat atau memperbaiki sesuatu</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb19" id="tidak_pernah19" value="1" {{(old('gb19') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah19">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb19" id="kadang-kadang19" value="2" {{(old('gb19') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang19">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb19" id="selalu19" value="3" {{(old('gb19') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu19">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb20" >20. Suka berdiri atau berjalan-jalan saat belajar</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb20" id="tidak_pernah20" value="1" {{(old('gb20') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah20">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb20" id="kadang-kadang20" value="2" {{(old('gb20') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang20">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb20" id="selalu20" value="3" {{(old('gb20') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu20">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb21" >21. Suka menggunakan gerakan tangan saat berbicara</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb21" id="tidak_pernah21" value="1" {{(old('gb21') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah21">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb21" id="kadang-kadang21" value="2" {{(old('gb21') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang21">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb21" id="selalu21" value="3" {{(old('gb21') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu21">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb22" >22. Terampil berolahraga</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb22" id="tidak_pernah22" value="1" {{(old('gb22') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah22">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb22" id="kadang-kadang22" value="2" {{(old('gb22') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang22">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb22" id="selalu22" value="3" {{(old('gb22') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu22">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="gb23" >23. Suka melihat gerakan tubuh sesorang untuk memahami maksud pikirannya</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb23" id="tidak_pernah23" value="1" {{(old('gb23') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah23">
                                                Tidak pernah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb23" id="kadang-kadang23" value="2" {{(old('gb23') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang23">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb23" id="selalu23" value="3" {{(old('gb23') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu23">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="gb24" >24. Harus melakukan apa yang telah dipelajari agar mudah dipahami</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb24" id="tidak_pernah24" value="1" {{(old('gb24') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak_pernah24">
                                                Tidak pernah
                                             </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb24" id="kadang-kadang24" value="2" {{(old('gb24') == '2') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="kadang-kadang24">
                                                Kadang-kadang
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gb24" id="selalu24" value="3" {{(old('gb24') == '3') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="selalu24">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="{{route('home')}}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

