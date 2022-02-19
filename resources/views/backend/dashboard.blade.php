@extends('backend.layout.main')
@section('title', 'Admin - Dashboard')
@section('content')
<div class="card border-left-warning shadow  py-2 mb-2">
    <div class="card-body">
            <div class="form-row">
                <div class="col"><img src="{{asset('assets/wikrama.png')}}" width="140px" alt=""></div>
                <div class="col-md-10  text-center m-0 font-weight-bold text-dark">
                    <h4 class="m-0 font-weight-bold text-dark">YAYASAN PRAWITAMA</h5>
                    <h5 class="m-0 font-weight-bold text-dark">SMK WIKRAMA 1 GARUT</h5>
                    <h5 class="m-0 font-weight-bold text-dark">Jalan Otto Iskandardinata kampung tanjung RT 003/RW 013, Pasawahan, Kec. Tarogong Kaler, Kabupaten Garut, Jawa Barat 44151</h5>
                    <h5 class="col font-weight-bold badge badge-primary">APLIKASI PEMETAAN MODELITAS BELAJAR, DOMINASI OTAK DAN KESEHATAN MENTAL EMOSIONAL SISWA</h5>
                </div>
            </div>
    </div>
</div>
<div class="row">
    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-8 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Gaya belajar</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($gb)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-brain fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-8 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Dominasi Otak</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{count($do)}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-child fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-4 col-md-8 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Kesehatan Mental dan Emosional
                        </div>
                        <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{count($kme)}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
