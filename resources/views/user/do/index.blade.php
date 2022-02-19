@extends('layouts.app')
@section('title', 'kuisioner - Dominasi Otak')
@section('css')
    <!-- Custom fonts for this template-->
    <link href={{asset("vendor/fontawesome-free/css/all.min.css")}} rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{asset("css/sb-admin-2.min.css")}} rel="stylesheet">
    <link href={{asset("css/kuis.css")}} rel="stylesheet">
    <link href={{asset("css/kuisioner.css")}} rel="stylesheet">
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
                            <h6 class="m-0 font-weight-bold text-primary">Petunjuk Pengisian Dominasi Otak</h6>
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
                            <h6 class="m-0 font-weight-bold text-primary">Form Kuisoner Dominasi Otak</h6>
                        </div>
                        <form action="{{route('dominasi.otak')}}" method="POST">
                            @csrf
                            <div class="card-body ">
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do1" >1. Suka bergerak dan banyak beraktivitas?</div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do1" id="ya1" value="1" {{(old('do1') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya1">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do1" id="tidak1" value="0" {{(old('do1') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak1">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do2" >2. Kesulitan dalam mewarnai gambar dan menulis? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do2" id="ya2" value="1"  {{(old('do2') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya2">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do2" id="tidak2" value="0"  {{(old('do2') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak2">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do3" >3. Sangat peka terhadap keritikan? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do3" id="ya3" value="1"  {{(old('do3') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya3">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do3" id="tidak3" value="0"  {{(old('do3') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak3">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do4" >4. Terampil dalam menyusun mainan (building toys), misalnya lego,balok susun? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do4" id="ya4" value="1"  {{(old('do4') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya4">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do4" id="tidak4" value="0"  {{(old('do4') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak4">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do5" >5. Terampil dalam menyusun uzzle dan mazes? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do5" id="ya5" value="1"  {{(old('do5') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya5">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do5" id="tidak5" value="0"  {{(old('do5') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak5">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do6" >6. Bila dibacakan sebuah buku kepada kamu sebanyak 2 atau 3 kali, dapatkah kamu mengisi kata yang hilang dengan ingetan yanag sangat? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do6" id="ya6" value="1"  {{(old('do6') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya6">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do6" id="tidak6" value="0"  {{(old('do6') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak6">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do7" >7. Sangat penting untuk menyukai guru di sekolah agar dapat mengerjakan pekerjaan denga baik didalam kelas? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do7" id="ya7" value="1"  {{(old('do7') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya7">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do7" id="tidak7" value="0"  {{(old('do7') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak7">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do8" >8. Mudah beralih perhatiannya, atau sering melamun? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do8" id="ya8" value="1"  {{(old('do8') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya8">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do8" id="tidak8" value="0"  {{(old('do8') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak8">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do9" >9. Tidak dapat menyelesaikan tugas secara konsisten? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do9" id="ya9" value="1"  {{(old('do9') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya9">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do9" id="tidak9" value="0"  {{(old('do9') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak9">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                <div class="font-weight-bold text-black"for="do10" >10. Cenderung berbuat dulu baru berpikir? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do10" id="ya10" value="1"  {{(old('do10') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya10">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do10" id="tidak10" value="0"  {{(old('do10') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak10">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do11" >11.Harus memotong label baju sebelum dikenakan? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do11" id="ya11" value="1"  {{(old('do11') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya11">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do11" id="tidak11" value="0"  {{(old('do11') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak11">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do12" >12. Hanya mau memakai baju yang lembut dan halus? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do12" id="ya12" value="1"  {{(old('do12') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya12">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do12" id="tidak12" value="0"  {{(old('do12') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak12">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do13" >13. Sangat menikmati saat berolahraga , berada dipesta yanag ramai, dan berekreasi di taman hiburan? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do13" id="ya13" value="1"  {{(old('do13') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya13">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do13" id="tidak13" value="0"  {{(old('do13') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak13">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do14" >14. Cendrung pemalu? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do14" id="ya14" value="1"  {{(old('do14') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya14">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do14" id="tidak14" value="0"  {{(old('do14') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak14">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do15" >15. Harus selalu diingatkan untuk mngerjakan sesutau pekerjaan ? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do15" id="ya15" value="1"  {{(old('do15') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya15">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do15" id="tidak15" value="0"  {{(old('do15') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak15">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do16" >16. Senang bersaing dan tidak mau kalah? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do16" id="ya16" value="1"  {{(old('do16') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya16">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do16" id="tidak16" value="0"  {{(old('do16') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak16">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do17" >17. Memiliki rasa humor yang baik? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do17" id="ya17" value="1" {{(old('do17') == '1') ? 'checked' : ''}} >
                                            <label class="form-check-label" for="ya17">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do17" id="tidak17" value="0"  {{(old('do17') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak17">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do18" >18. Mempunyai kemampuan di atas rata-rata untuk mengerti dan mencitakan permainan kata? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do18" id="ya18" value="1"  {{(old('do18') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya18">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do18" id="tidak18" value="0"  {{(old('do18') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak18">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do19" >19. Apakah selalu ingin sempurna dalam mencoba sesuatu yang baru? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do19" id="ya19" value="1"  {{(old('do19') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya19">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do19" id="tidak20" value="0"  {{(old('do19') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak20">
                                                Tidak
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="font-weight-bold text-black"for="do20" >20. Mampukan mengingat kembal saat liburan atau kejadian 1 atau 2 tahun yang lalu, secara gamblang detailnya? </div>
                                    <div class="py-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do20" id="ya20" value="1"  {{(old('do20') == '1') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="ya20">
                                                Ya
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="do20" id="tidak20" value="0"  {{(old('do20') == '0') ? 'checked' : ''}}>
                                            <label class="form-check-label" for="tidak20">
                                                Tidak
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


