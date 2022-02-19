@extends('backend.layout.main')
@section('title', '')
@section('page-heading', 'Rapot Student')
@section('css')
<style type="text/css">
    .upper { text-transform: uppercase; }
    .lower { text-transform: lowercase; }
    .cap   { text-transform: capitalize; }
    .small { font-variant:   small-caps; }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">

            <div class="d-sm-flex align-items-center justify-content-between mb-4" data-toggle="modal" data-target="#import">
                <a href="{{route('panel.admin.report')}}" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                    <i class="fas fa-hand-point-left text-white-50"></i>
                    Back
                </a>
                <a href="{{route('panel.admin.cetak', $dataSiswa->user_id)}}" target="_blank" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                    <i class="fas fa-print text-white-50"></i>
                     Print
                </a>
            </div>

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
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Emosional</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_kme->Emosional}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-brain fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Perilaku</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_kme->Perilaku}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-child fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Hiperaktivitas
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$data_kme->Hiperaktif}}</div>
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
                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                        Pertemanan</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data_kme->Teman_sebaya}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Gaya Belajar</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body pt-4 pb-2">
                            <div id="ChartGayaBelajar">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Dominasi Otak</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body pt-4 pb-2">
                            <div id="ChartDominasiOtak">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h6 class="m-0 font-weight-bold text-dark pt-2 mb-2">A. KESULITAN</h6>
            <div class="card mb-4  shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    Gaya Belajar
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr class="text-info">
                                <th  >Gaya Belajar</th>
                                <th scope="col">Nilai</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody class="text-dark">
                            <tr>
                                <td>Visual</td>
                                <td>{{$data_gb->Visual}}</td>
                                @if ($data_gb->Visual >= 18 && $data_gb->Visual <= 24)
                                    <td>
                                        <h5 class="badge badge-primary">Optimal</h5>
                                    </td>
                                    <td>Manusia visual, di mana ia akan secara optimal menyerap informasi yang dibacanya/dilihatnya.</td>
                                @elseif ($data_gb->Visual >= 12 && $data_gb->Visual <= 17)
                                    <td>
                                        <h5 class="badge badge-primary">Cukup Optimal</h5>
                                    </td>
                                    <td>Bisa dengan mudah menyerap informasi yang di baca/diingatnya.</td>
                                @elseif ($data_gb->Visual >= 0 && $data_gb->Visual <= 11)
                                    <td>
                                        <h5 class="badge badge-primary">Belum Optimal</h5>
                                    </td>
                                    <td>Mengalami kesulitan menyerap informasi yang di baca/diingatnya.</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Kinestetik</td>
                                <td>{{$data_gb->Kinestetik}}</td>
                                @if ($data_gb->Kinestetik >= 18 && $data_gb->Kinestetik <= 24)
                                    <td>
                                        <h5 class="badge badge-primary">Optimal</h5>
                                    </td>
                                    <td>Manusia kinestetik, di mana ia akan sangat senang dan cepat
                                        mengerti bila informasi yang harus diserapnya terlebih dahulu “dicontohkan”
                                        atau ia membayangkan orang lain melakukan hal  yang akan dipelajarinya.</td>
                                @elseif ($data_gb->Kinestetik >= 12 && $data_gb->Kinestetik <= 17)
                                    <td>
                                        <h5 class="badge badge-primary">Cukup Optimal</h5>
                                    </td>
                                    <td>Bisa dengan mudah menyerap informasi bila terlebih dahulu "dicontohkan"
                                        atau ia membayangkan melakukan hal yang akan di pelajarinya.</td>
                                @elseif ($data_gb->Kinestetik >= 0 && $data_gb->Kinestetik <= 11)
                                    <td>
                                        <h5 class="badge badge-primary">Belum Optimal</h5>
                                    </td>
                                    <td>Mengalami kesulitan menyerap informasi dengan melakukan gerakan.</td>
                                @endif
                            </tr>
                            <tr>
                                <td>Audiotori</td>
                                <td>{{$data_gb->Auditori}}</td>
                                @if ($data_gb->Auditori >= 18 && $data_gb->Auditori <= 24)
                                    <td>
                                        <h5 class="badge badge-primary">Optimal</h5>
                                    </td>
                                    <td>Manusia auditori, di mana informasi yang masuk melalui apa yang didengarnya akan diserap secara optimal.</td>
                                @elseif ($data_gb->Auditori >= 12 && $data_gb->Auditori <= 17)
                                    <td>
                                        <h5 class="badge badge-primary">Cukup Optimal</h5>
                                    </td>
                                    <td>Bisa dengan mudah menyerap informasi yang didengarnya.</td>
                                @elseif ($data_gb->Auditori >= 0 && $data_gb->Auditori <= 11)
                                    <td>
                                        <h5 class="badge badge-primary">Belum Optimal</h5>
                                    </td>
                                    <td>Mengalami kesulitan menyerap informasi yang di dengarnya.</td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card mb-4  shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    Dominasi Otak
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr>
                                <td class="text-info">Prolehan</td>
                                <td>{{$data_do->Dominasi_otak}}</td>
                            </tr>
                            @if ($data_do->Dominasi_otak >= 17 && $data_do->Dominasi_otak <= 20)
                                <tr>
                                    <td class="text-info">Kesimpulan</td>
                                    <td>Sangat Otak Kanan</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Keterangan</td>
                                    <td>Sangat intuitif dan proses belajarnya acak (tidak berurutan), ingatan visual(gambar) sangat kuat,
                                        tidak menyukai aturan, sering bertanya, kreatif dan menyukai hal baru</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 13 && $data_do->Dominasi_otak <= 16)
                                <tr>
                                    <td class="text-info">Kesimpulan</td>
                                    <td>Lebih Otak Kanan</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Keterangan</td>
                                    <td>Intuitif dan proses belajarnya acak (tidak berurutan), ingatan visual(gambar) sangat kuat,
                                        tidak menyukai aturan, sering bertanya, kreatif dan menyukai hal baru</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 9 && $data_do->Dominasi_otak <= 12)
                                <tr>
                                    <td class="text-info">Kesimpulan</td>
                                    <td>Seimbang</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Keterangan</td>
                                    <td>Logis, bekerja secara efisien dan berurutan, kreatif dan berurutan, kreatif,
                                        briliant, menyelesaikan masalah dengan holistic (menyeluruh) dan detail.</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 5 && $data_do->Dominasi_otak <= 8)
                                <tr>
                                    <td class="text-info">Kesimpulan</td>
                                    <td>Lebih Otak Kiri</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Keterangan</td>
                                    <td>Senang membuat aturan dan menaati aturan, pola pikirnya berurutan, sangat logis(logika),
                                        analitik(memahami dan mendalami) dan senang membuat daftar.</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 0 && $data_do->Dominasi_otak <= 4)
                                <tr>
                                    <td class="text-info">Kesimpulan</td>
                                    <td>Sangat Otak Kiri</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Keterangan</td>
                                    <td>Sangat senang membuat aturan dan menaati aturan, pola pikirnya sangat berurutan,
                                        sangat logis(logika), analitik(memahami dan mendalami) dan senang membuat daftar.</td>
                                </tr>
                                <tr>
                                    <td class="text-info">Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mb-4 shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    Gejala Emosional
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr>
                                <td class="text-info">PEROLEHAN</td>
                                <td>{{$data_kme->Emosional}}</td>
                            </tr>
                            @if ($data_kme->Emosional >= 0 && $data_kme->Emosional <= 5)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Sering mengeluh sakit pada badan (seperti sakit kepala, perut, dll)</li>
                                            <li>Banyak kehawatiran</li>
                                            <li>Sering tidak bahagia, menangis</li>
                                            <li>Gugup atau mudah hilang percaya diri</li>
                                            <li>Mudah takut</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Bantu untuk mencari akar permasalahan</li>
                                            <li>Buat agar merasa nyaman</li>
                                            <li>Beri arahan untuk mengatasi kecemasan</li>
                                            <li>Beri kesibukan positif</li>
                                            <li>Lakukan hal yang membuat anak tenang</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Emosional >= 6 && $data_kme->Emosional <= 6)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Borderline</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Sering mengeluh sakit pada badan (seperti sakit kepala, perut, dll)</li>
                                            <li>Banyak kehawatiran</li>
                                            <li>Sering tidak bahagia, menangis</li>
                                            <li>Gugup atau mudah hilang percaya diri</li>
                                            <li>Mudah takut</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Bantu untuk mencari akar permasalahan</li>
                                            <li>Buat agar merasa nyaman</li>
                                            <li>Beri arahan untuk mengatasi kecemasan</li>
                                            <li>Beri kesibukan positif</li>
                                            <li>Lakukan hal yang membuat anak tenang</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Emosional >= 7 && $data_kme->Emosional <= 10)
                            <tr>
                                <td class="text-info">KATEGORI</td>
                                <td>Abnormal</td>
                            </tr>
                            <tr>
                                <td class="text-info">KETERANGAN</td>
                                <td>
                                    <ul>
                                        <li>Sering mengeluh sakit pada badan (seperti sakit kepala, perut, dll)</li>
                                        <li>Banyak kehawatiran</li>
                                        <li>Sering tidak bahagia, menangis</li>
                                        <li>Gugup atau mudah hilang percaya diri</li>
                                        <li>Mudah takut</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-info">PENANGANAN</td>
                                <td>
                                    <ul>
                                        <li>Bantu untuk mencari akar permasalahan</li>
                                        <li>Buat agar merasa nyaman</li>
                                        <li>Beri arahan untuk mengatasi kecemasan</li>
                                        <li>Beri kesibukan positif</li>
                                        <li>Lakukan hal yang membuat anak tenang</li>
                                    </ul>
                                </td>
                            </tr>
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mb-4 shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    Masalah Perilaku
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr>
                                <td class="text-info">PEROLEHAN</td>
                                <td>{{$data_kme->Perilaku}}</td>
                            </tr>
                            @if ($data_kme->Perilaku >= 0 && $data_kme->Perilaku <= 3)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Sering marah meledak - ledak</li>
                                            <li>Umumnya berperilaku tidak baik, tidak melakukan apa yang diminta orang dewasa</li>
                                            <li>Sering berkelahi</li>
                                            <li>Sering berbohong, sifat curang</li>
                                            <li>Mencuri</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Tingkatkan kedekatan dengan keluarga</li>
                                            <li>Ajarkan nilai – nilai spiritual</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Perilaku >= 4 && $data_kme->Perilaku <= 4)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Borderline</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Sering marah meledak - ledak</li>
                                            <li>Umumnya berperilaku tidak baik, tidak melakukan apa yang diminta orang dewasa</li>
                                            <li>Sering berkelahi</li>
                                            <li>Sering berbohong, sifat curang</li>
                                            <li>Mencuri</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Tingkatkan kedekatan dengan keluarga</li>
                                            <li>Ajarkan nilai – nilai spiritual</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Perilaku >= 5 && $data_kme->Perilaku <= 10)
                            <tr>
                                <td class="text-info">KATEGORI</td>
                                <td>Abnormal</td>
                            </tr>
                            <tr>
                                <td class="text-info">KETERANGAN</td>
                                <td>
                                    <ul>
                                        <li>Sering marah meledak - ledak</li>
                                        <li>Umumnya berperilaku tidak baik, tidak melakukan apa yang diminta orang dewasa</li>
                                        <li>Sering berkelahi</li>
                                        <li>Sering berbohong, sifat curang</li>
                                        <li>Mencuri</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-info">PENANGANAN</td>
                                <td>
                                    <ul>
                                        <li>Tingkatkan kedekatan dengan keluarga</li>
                                        <li>Ajarkan nilai – nilai spiritual</li>
                                    </ul>
                                </td>
                            </tr>
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mb-4 shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    Masalah Hiperaktivitas
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr>
                                <td class="text-info">PEROLEHAN</td>
                                <td>{{$data_kme->Hiperaktif}}</td>
                            </tr>
                            @if ($data_kme->Hiperaktif >= 0 && $data_kme->Hiperaktif <= 5)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Gelisah, terlalu aktif, tidak dapat diam lama</li>
                                            <li>Terus bergerak dengan resah</li>
                                            <li>Perhatian mudah teralih, konsentrasi buyar</li>
                                            <li>Tidak berpikir sebelum bertindak</li>
                                            <li>Tidak mampu menyelesaikan tugas sampai selesai</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Membentuk pola hidup yang terstruktur</li>
                                            <li>Mengatur pola tidur dan istirahat</li>
                                            <li>Menerapkan disiplin yang positif/li>
                                            <li>Berolahraga rutin</li>
                                            <li>Mengajak anak untuk bersosialisasi dengan masyarakat</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Hiperaktif >= 6 && $data_kme->Hiperaktif <= 6)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Borderline</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Gelisah, terlalu aktif, tidak dapat diam lama</li>
                                            <li>Terus bergerak dengan resah</li>
                                            <li>Perhatian mudah teralih, konsentrasi buyar</li>
                                            <li>Tidak berpikir sebelum bertindak</li>
                                            <li>Tidak mampu menyelesaikan tugas sampai selesai</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Membentuk pola hidup yang terstruktur</li>
                                            <li>Mengatur pola tidur dan istirahat</li>
                                            <li>Menerapkan disiplin yang positif/li>
                                            <li>Berolahraga rutin</li>
                                            <li>Mengajak anak untuk bersosialisasi dengan masyarakat</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Hiperaktif >= 7 && $data_kme->Hiperaktif <= 10)
                            <tr>
                                <td class="text-info">KATEGORI</td>
                                <td>Abnormal</td>
                            </tr>
                            <tr>
                                <td class="text-info">KETERANGAN</td>
                                <td>
                                    <ul>
                                        <li>Gelisah, terlalu aktif, tidak dapat diam lama</li>
                                        <li>Terus bergerak dengan resah</li>
                                        <li>Perhatian mudah teralih, konsentrasi buyar</li>
                                        <li>Tidak berpikir sebelum bertindak</li>
                                        <li>Tidak mampu menyelesaikan tugas sampai selesai</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-info">PENANGANAN</td>
                                <td>
                                    <ul>
                                        <li>Membentuk pola hidup yang terstruktur</li>
                                        <li>Mengatur pola tidur dan istirahat</li>
                                        <li>Menerapkan disiplin yang positif/li>
                                        <li>Berolahraga rutin</li>
                                        <li>Mengajak anak untuk bersosialisasi dengan masyarakat</li>
                                    </ul>
                                </td>
                            </tr>
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mb-4 shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    Masalah Teman Sebaya
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr>
                                <td class="text-info">PEROLEHAN</td>
                                <td>{{$data_kme->Teman_sebaya}}</td>
                            </tr>
                            @if ($data_kme->Teman_sebaya >= 0 && $data_kme->Teman_sebaya <= 3)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Cenderung menyendiri, lebih senang main sendiri</li>
                                            <li>Tidak punya 1 (satu) teman baik</li>
                                            <li>Tidak disukai anak – anak / teman lain</li>
                                            <li>Di ganggu / di gertak oleh anak lain</li>
                                            <li>Lebih senang bergaul dengan orang dewasa daripada anak - anak</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Dengarkan kelihan tanpa menghakimi</li>
                                            <li>Ajarkan cara mempertahankan diri</li>
                                            <li>Tingkatkan kepercayaan diri</li>
                                            <li>Berikan apesiasi</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Teman_sebaya >= 4 && $data_kme->Teman_sebaya <= 5)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Borderline</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Cenderung menyendiri, lebih senang main sendiri</li>
                                            <li>Tidak punya 1 (satu) teman baik</li>
                                            <li>Tidak disukai anak – anak / teman lain</li>
                                            <li>Di ganggu / di gertak oleh anak lain</li>
                                            <li>Lebih senang bergaul dengan orang dewasa daripada anak - anak</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Dengarkan kelihan tanpa menghakimi</li>
                                            <li>Ajarkan cara mempertahankan diri</li>
                                            <li>Tingkatkan kepercayaan diri</li>
                                            <li>Berikan apesiasi</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Teman_sebaya >= 6 && $data_kme->Teman_sebaya <= 10)
                            <tr>
                                <td class="text-info">KATEGORI</td>
                                <td>Abnormal</td>
                            </tr>
                            <tr>
                                <td class="text-info">KETERANGAN</td>
                                <td>
                                    <ul>
                                        <li>Cenderung menyendiri, lebih senang main sendiri</li>
                                        <li>Tidak punya 1 (satu) teman baik</li>
                                        <li>Tidak disukai anak – anak / teman lain</li>
                                        <li>Di ganggu / di gertak oleh anak lain</li>
                                        <li>Lebih senang bergaul dengan orang dewasa daripada anak - anak</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-info">PENANGANAN</td>
                                <td>
                                    <ul>
                                        <li>Dengarkan kelihan tanpa menghakimi</li>
                                        <li>Ajarkan cara mempertahankan diri</li>
                                        <li>Tingkatkan kepercayaan diri</li>
                                        <li>Berikan apesiasi</li>
                                    </ul>
                                </td>
                            </tr>
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
            <div class="card mb-4 shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    KESIMPULAN
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr>
                                @if ($data_kme->Total >= 0 && $data_kme->Total <= 15)
                                    <td class="text-info">SKOR</td>
                                    <td>{{$data_kme->Total}}</td>
                                    <td class="upper">{{'SISWA ATAS NAMA'. ' ' . $dataSiswa->nama. ' ' . 'NORMAL' }}</td>
                                @elseif ($data_kme->Total >= 16 && $data_kme->Total <= 19)
                                    <td class="text-info">SKOR</td>
                                    <td>{{$data_kme->Total}}</td>
                                    <td class="upper">{{'SISWA ATAS NAMA'. ' ' .$dataSiswa->nama. ' ' . 'BORDERLINE' }}</td>
                                @elseif ($data_kme->Total >= 20 && $data_kme->Total <= 40)
                                    <td class="text-info">SKOR</td>
                                    <td>{{$data_kme->Total}}</td>
                                    <td class="upper">{{'SISWA ATAS NAMA'. ' ' . $dataSiswa->nama. ' ' . 'ABNORMAL'}}</td>
                                @endif
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <h6 class="m-0 font-weight-bold text-dark pt-2 mb-2">B. KEKUATAN</h6>
            <div class="card mb-4 shadow">
                <div class="card-header m-0 font-weight-bold text-dark">
                    Prososial
                </div>
                <div class="card-body">
                    <table class="table m-0 font-weight-bold text-dark">
                        <thead>
                            <tr>
                                <td class="text-info">PEROLEHAN</td>
                                <td>{{$data_kme->Sosial}}</td>
                            </tr>
                            @if ($data_kme->Sosial >= 6 && $data_kme->Sosial <= 10)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Normal</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Mampu mempertimbangkan perasaan orang lain</li>
                                            <li>Bersedia berbagi dengan anak lain</li>
                                            <li>Suka menolong</li>
                                            <li>Bersikap baik pada anak yang lebih muda</li>
                                            <li>Sering menawarkan diri membantu orang lain</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Penanganan A</li>
                                            <li>Penanganan B</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Sosial >= 5 && $data_kme->Sosial <= 5)
                                <tr>
                                    <td class="text-info">KATEGORI</td>
                                    <td>Borderline</td>
                                </tr>
                                <tr>
                                    <td class="text-info">KETERANGAN</td>
                                    <td>
                                        <ul>
                                            <li>Mampu mempertimbangkan perasaan orang lain</li>
                                            <li>Bersedia berbagi dengan anak lain</li>
                                            <li>Suka menolong</li>
                                            <li>Bersikap baik pada anak yang lebih muda</li>
                                            <li>Sering menawarkan diri membantu orang lain</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-info">PENANGANAN</td>
                                    <td>
                                        <ul>
                                            <li>Penanganan A</li>
                                            <li>Penanganan B</li>
                                        </ul>
                                    </td>
                                </tr>
                            @elseif ($data_kme->Sosial >= 0 && $data_kme->Sosial <= 4)
                            <tr>
                                <td class="text-info">KATEGORI</td>
                                <td>Abnormal</td>
                            </tr>
                            <tr>
                                <td class="text-info">KETERANGAN</td>
                                <td>
                                    <ul>
                                        <li>Mampu mempertimbangkan perasaan orang lain</li>
                                        <li>Bersedia berbagi dengan anak lain</li>
                                        <li>Suka menolong</li>
                                        <li>Bersikap baik pada anak yang lebih muda</li>
                                        <li>Sering menawarkan diri membantu orang lain</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-info">PENANGANAN</td>
                                <td>
                                    <ul>
                                        <li>Penanganan A</li>
                                        <li>Penanganan B</li>
                                    </ul>
                                </td>
                            </tr>
                            @endif
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('js')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        Highcharts.chart('ChartDominasiOtak', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Student Brain Domination Report'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Result',
                colorByPoint: true,
                data:
                [{
                    name: 'Otak Kanan',
                    y:{!!json_encode($data_do->Dominasi_otak)!!},
                    sliced: false,
                    selected: false
                },
                 {
                    name: 'Otak Kiri',
                    y: {!!json_encode($dominasiOtak)!!},
                    sliced: false,
                    selected: false
                }]
            }]
        });

        Highcharts.chart('ChartGayaBelajar', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Student Learning Style Report'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                    }
                }
            },
            series: [{
                name: 'Result',
                colorByPoint: true,
                data: [{
                    name: 'Audiotori',
                    y: {!!json_encode($data_gb->Auditori)!!},
                    sliced: false,
                    selected: false
                }, {
                    name: 'Kinestetik',
                    y: {!!json_encode($data_gb->Kinestetik)!!},
                }, {
                    name: 'Visual',
                    y: {!!json_encode($data_gb->Visual)!!},
                }]
            }]
        });
    </script>
@endsection




