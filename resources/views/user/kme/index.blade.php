@extends('layouts.app')
@section('title', 'kuisioner - Kesehatan Mental dan Emosional')
@section('css')
     <!-- Custom fonts for this template-->
     <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href={{asset("css/sb-admin-2.min.css")}} rel="stylesheet">
     <link href={{asset("css/kuis.css")}} rel="stylesheet">
@endsection
@section('content')
     <!-- Topbar -->
     <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow" id="demo1Navbar">

        {{-- <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button> --}}

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
                            <h6 class="m-0 font-weight-bold text-primary">Petunjuk Pengisian Kesehatan Mental dan Emosional</h6>
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
                            <h6 class="m-0 font-weight-bold text-primary">Form Kuisoner Kesehatan Mental dan Emosional</h6>
                        </div>
                        <form action="{{route('kesehatan.mental')}}" method="POST">
                            @csrf
                            <div class="card-body ">
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme1" >1. Saya berusaha bersikap baik kepada orang lain. Saya peduli dengan perasaan mereka</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme1" id="tidak_benar1" value="0" {{old('kme1') == '0' ? 'checked'  : ''}} >
                                            <label class="form-check-label" for="tidak_benar1" >
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme1" id="agak_benar1" value="1"  {{old('kme1') == '1' ? 'checked' : ''}}>
                                            <label class="form-check-label" for="agak_benar1">
                                                Agak Benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme1" id="benar1" value="2"  {{old('kme1') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar1">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme2" >2. Saya gelisah, saa tidak dapat diam untuk waktu lama</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme2" id="tidak_benar" value="0" {{old('kme2') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme2" id="agak_benar2" value="1" {{old('kme2') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar2">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme2" id="benar2" value="2" {{old('kme2') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar2">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme3" >3. Saya sering sakit kepala, sakit perut ataumacam-macam sakit lain</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme3" id="tidak_benar3" value="0" {{old('kme3') == '0' ? 'checked'  : ''}} >
                                            <label class="form-check-label" for="tidak_benar3">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme3" id="agak_benar3" value="1" {{old('kme3') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar3">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme3" id="benar3" value="2" {{old('kme3') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar3">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme4" >4. Kalau saya memeiliki mainana CD atau makanan saya biasanya berbagi dengan orang lain</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme4" id="tidak_benar4" value="0" {{old('kme4') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar4">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme4" id="agak_benar4" value="1" {{old('kme4') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar4">
                                                Agak Benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme4" id="benar4" value="2" {{old('kme4') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar4">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme5" >5. Saya menjadi sangat marah dan sering tidak bisa mengendalikan kemarahan saya </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme5" id="tidak_benar5" value="0" {{old('kme5') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar5">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme5" id="agak_benar5" value="1" {{old('kme5') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar5">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme5" id="benar5" value="2" {{old('kme5') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar5">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme6" >6. Saya lebih suka sendirian daripada bersama dengan orang-orang yang seumur saya</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme6" id="tidak_benar6" value="0" {{old('kme6') == '0' ? 'checked'  : ''}} >
                                            <label class="form-check-label" for="tidak_benar6">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme6" id="agak_benar6" value="1" {{old('kme6') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar6">
                                                Agak benar
                                            </label>
                                         </div>
                                         <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme6" id="benar6" value="2" {{old('kme6') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar6">
                                                Benar
                                            </label>
                                        </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme7" >7. Saya biasakan melakukan apa yang diperitahkan oleh orang lain</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme7" id="tidak_benar7" value="0" {{old('kme7') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar7">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme7" id="agak_benar7" value="1" {{old('kme7') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar7">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme7" id="benar7" value="2" {{old('kme7') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar7">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme8" >8. Saya banyak merasa cemas atau khawatir terhadap apapun</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme8" id="tidak_benar8" value="0" {{old('kme8') == '0' ? 'checked'  : ''}} >
                                            <label class="form-check-label" for="tidak_benar8">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme8" id="agak_benar8" value="1" {{old('kme8') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar8">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme8" id="benar8" value="2" {{old('kme8') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar8">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme9">9. Saya selalu siap menolong jika orang lain terluka, kecewa atau merasa sakit</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme9" id="tidak_benar9" value="0"  {{old('kme9') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar9">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme9" id="agak_benar9" value="1" {{old('kme9') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar9">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme9" id="benar9" value="2" {{old('kme9') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar9">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme10">10. Bila sedang gelisah atau cemas badan saya sering bergerak-gerak tanpa saya sadari</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme10" id="tidak_benar10" value="0" {{old('kme10') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar10">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme10" id="agak_benar10" value="1" {{old('kme10') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar10">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme10" id="benar10" value="2" {{old('kme10') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar10">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme11" >11. Saya mempunyai satu teman yang baik atau lebih</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme11" id="tidak_benar11" value="0" {{old('kme11') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar11">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme11" id="agak_benar11" value="1" {{old('kme11') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar11">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme11" id="benar11" value="2" {{old('kme11') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar11">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme12">12. Saya sering bertengkar dengan orang lain. Saya dapat memaksa orang lain melakukannya apa yang saya inginkan</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme12" id="tidak_benar12" value="0" {{old('kme12') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar12">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme12" id="agak_benar12" value="1" {{old('kme12') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar12">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme12" id="benar12" value="2" {{old('kme12') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar12">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme13" >13. Saya sering merasa tidak bahagia, sedih menangis</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme13" id="tidak_benar13" value="0" {{old('kme13') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar13">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme13" id="agak_benar13" value="1" {{old('kme13') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar13">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme13" id="benar13" value="2" {{old('kme13') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar13">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme14" >14. Orang lain seumur saya pada umumnya menyukai saya</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme14" id="tidak_benar14" value="0" {{old('kme14') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar14">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme14" id="agak_susah14" value="1" {{old('kme14') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah14">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme14" id="benar14" value="2" {{old('kme14') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar14">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme15">15. Perhatian saya mudah terlihatkan. Saya sulit memusatkan perhataian pada apapun</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme15" id="tidak_benar15" value="0" {{old('kme15') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar15">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme15" id="agak_benar15" value="1" {{old('kme15') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar15">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme15" id="benar15" value="2" {{old('kme15') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar15">
                                                Selalu
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme16" >16. Saya merasa gugup dalam situasi baru. Saya mudah kehilangan kepercayaan diri</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme16" id="tidak_benar16" value="0" {{old('kme16') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar16">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme16" id="agak_pernah16" value="1" {{old('kme16') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_pernah16">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme16" id="benar16" value="2">
                                            <label class="form-check-label" for="benar16" {{old('kme16') == '2' ? 'checked'  : ''}}>
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme17">17. SSaya bersikap baik pada anak-anak yang lebih muda dari saya</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme17" id="tidak_benar17" value="0" {{old('kme17') == '0' ? 'checked'  : ''}} >
                                            <label class="form-check-label" for="tidak_benar17">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme17" id="agak_susah17" value="1" {{old('kme17') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah17">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme17" id="benar17" value="2" {{old('kme17') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar17">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme18" >18. Saya bersikap dituduh berbohong atau berbuat curang</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme18" id="tidak_benar18" value="0" {{old('kme18') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar18">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme18" id="agak_susah18" value="1" {{old('kme18') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah18">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme18" id="benar18" value="2" {{old('kme18') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar18">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme19" >19. Saya sering diganggu atau dipermainkan oelh anak-anak atau remaja lainnya</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme19" id="tidak_benar19" value="0" {{old('kme19') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar19">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme19" id="agak_susah19" value="1" {{old('kme19') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah19">
                                                Agak susah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme19" id="benar19" value="2" {{old('kme19') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar19">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme20" >20. Ssaya sering menawarkan diri untuk menolong orang lain, orang tua, guru atau anak-anak</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme20" id="tidak_benar20" value="0" {{old('kme20') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar20">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme20" id="agak_susah20" value="1" {{old('kme20') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah20">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme20" id="benar20" value="2" {{old('kme20') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar20">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme21" >21. Sebelumnya melukakan sesuatu saya berfikir dahulu tentang akibatnya</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme21" id="tidak_benar21" value="0" {{old('kme21') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar21">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme21" id="agak_benar21" value="1" {{old('kme21') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar21">
                                                Agak susah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme21" id="benar21" value="2" {{old('kme21') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar21">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="kme22" >22. Saya mengambil barang yang bukan milik saya di ruma, sekolah, atau darimana saja</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme22" id="tidak_benar22" value="0" {{old('kme22') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar22">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme22" id="agak_benar22" value="1" {{old('kme22') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_benar22">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme22" id="benar22" value="2" {{old('kme22') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar22">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme23" >23. Saya lebih mudah berteman dengan orang dewasa daripada dengan orang-orang seumuran saya</div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme23" id="tidak_benar23" value="0" {{old('kme23') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar23">
                                                Tidak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme23" id="agak_susah23" value="1" {{old('kme23') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah23">
                                                Agak benar
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme23" id="benar23" value="2" {{old('kme23') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar23">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme24" >24. Banyak yang saya takuti . Saya mudah menjadi  takut </div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme24" id="tidak_benar24" value="0" {{old('kme24') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar24">
                                                Tidak benar
                                             </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme24" id="agak_susah24" value="1" {{old('kme24') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah24">
                                                Agak susah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme24" id="benar24" value="2" {{old('kme24') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar24">
                                                Benar
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black" for="kme25" >25. Saya menyelesaikan pekerjaan yanag saya lakukan. Saya mempunyai perhatian yang baik terhadap apapun </div>
                                        <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme25" id="tidak_benar25" value="0" {{old('kme25') == '0' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="tidak_benar25">
                                                Tidak benar
                                             </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme25" id="agak_susah25" value="1" {{old('kme25') == '1' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="agak_susah25">
                                                Agak susah
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kme25" id="benar25" value="2" {{old('kme25') == '2' ? 'checked'  : ''}}>
                                            <label class="form-check-label" for="benar25">
                                                Benar
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

