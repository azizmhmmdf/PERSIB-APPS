@extends('layouts.cetak')
@section('title', 'Cetak Rapot')
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
        <div class="col-md-12 pt-4">
            <div class="card border-left-warning py-2 mb-2">
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-row">
                            <img class="col py-2 mb-2 ml-2"   width="2000px" height="230" src="{{asset('assets/KOP WIKRAMA BARU fix.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-left-primary   py-2 mb-2">
                <div class="card-body text-center">
                    <h4 class="m-0 font-weight-bold text-dark">LAPORAN PEMETAAN BAKAT SISWA</h4>
                </div>
            </div>

            <div class="card border-left-primary py-2 mb-2">
                <div class="card-body">
                    <table>
                        <tbody class="m-0 font-weight-bold text-dark" >
                            <tr>
                                <td>NOMOR</td>
                                <td style="padding-left:50px;">:</td>
                                <td style="padding-left:25px;">{{$data_siswa->id}}</td>
                            </tr>
                            <tr>
                                <td>NAMA</td>
                                <td style="padding-left:50px;">:</td>
                                <td style="padding-left:25px;">{{$data_siswa->nama}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

	        <h6 class="m-3 font-weight-bold text-dark pt-2 mb-2">I. KESEHATAN INTELEGENSIA</h6>
            <div class="card mb-2 ">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered font-weight-bold -sm" id="data_table" width="100%" cellspacing="0">
                            <thead  class="text-left">
                                <tr>
                                    <th colspan="4" class="text-left">A. GAYA BELAJAR</th>
                                </tr>
                                <tr class="text-center">
                                    <td colspan="3">GAYA BELAJAR</td>
                                    <td colspan="2">DESKRIPSI</td>
                                </tr>
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
                                        <td>Bisa dengan mudah menyerap informasi bila terlebih dahulu "dicontohkan" atau ia membayangkan melakukan hal yang akan di pelajarinya.</td>
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
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card mb-2 ">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered font-weight-bold -sm" id="data_table" width="100%" cellspacing="0">
                            <thead  class="text-left    ">
                                <tr>
                                    <th colspan="2" class="text-left">A. DOMINASI OTAK</th>
                                </tr>
                                <tr>
                                    <td>Prolehan</td>
                                    <td>{{$data_do->Dominasi_otak}}</td>
                                </tr>
                                @if ($data_do->Dominasi_otak >= 17 && $data_do->Dominasi_otak <= 20)
                                <tr>
                                    <td>Kesimpulan</td>
                                    <td>Sangat Otak Kanan</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>Sangat intuitif dan proses belajarnya acak (tidak berurutan), ingatan visual(gambar) sangat kuat,
                                        tidak menyukai aturan, sering bertanya, kreatif dan menyukai hal baru</td>
                                </tr>
                                <tr>
                                    <td>Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 13 && $data_do->Dominasi_otak <= 16)
                                <tr>
                                    <td>Kesimpulan</td>
                                    <td>Lebih Otak Kanan</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>Intuitif dan proses belajarnya acak (tidak berurutan), ingatan visual(gambar) sangat kuat,
                                        tidak menyukai aturan, sering bertanya, kreatif dan menyukai hal baru</td>
                                </tr>
                                <tr>
                                    <td>Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 9 && $data_do->Dominasi_otak <= 12)
                                <tr>
                                    <td>Kesimpulan</td>
                                    <td>Seimbang</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>Logis, bekerja secara efisien dan berurutan, kreatif dan berurutan, kreatif,
                                        briliant, menyelesaikan masalah dengan holistic (menyeluruh) dan detail.</td>
                                </tr>
                                <tr>
                                    <td>Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 5 && $data_do->Dominasi_otak <= 8)
                                <tr>
                                    <td>Kesimpulan</td>
                                    <td>Lebih Otak Kiri</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>Senang membuat aturan dan menaati aturan, pola pikirnya berurutan, sangat logis(logika),
                                        analitik(memahami dan mendalami) dan senang membuat daftar.</td>
                                </tr>
                                <tr>
                                    <td>Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @elseif ($data_do->Dominasi_otak >= 0 && $data_do->Dominasi_otak <= 4)
                                <tr>
                                    <td>Kesimpulan</td>
                                    <td>Sangat Otak Kiri</td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td>Sangat senang membuat aturan dan menaati aturan, pola pikirnya sangat berurutan,
                                        sangat logis(logika), analitik(memahami dan mendalami) dan senang membuat daftar.</td>
                                </tr>
                                <tr>
                                    <td>Ketertarikan</td>
                                    <td></td>
                                </tr>
                            @endif
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

	        <h6 class="m-0 font-weight-bold text-dark pt-2 mb-2">II. KESEHATAN MENTAL DAN EMOSIONAL</h6>
            <div class="card mb-2 ">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered font-weight-bold mb-4" id="data_table" width="100%" cellspacing="0">
                            <thead  class="text-left">
                                <tr>
                                    <th colspan="4" class="text-left">A. KESULITAN</th>
                                </tr>
                                @if ($data_kme->Emosional >= 0 && $data_kme->Emosional <= 5)
                                    <tr>
                                        <th  class="text-left">a.</th>
                                        <th colspan="3" class="text-left">Gejala Emosional <i>*Kondisi perasaan anak terhadap individu</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Emosional}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Normal</td>
                                    </tr>
                                @elseif ($data_kme->Emosional >= 6 && $data_kme->Emosional <= 6)
                                    <tr>
                                        <th  class="text-left">a.</th>
                                        <th colspan="3" class="text-left">Gejala Emosional <i>*Kondisi perasaan anak terhadap individu</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Emosional}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Borderline</td>
                                    </tr>
                                @elseif ($data_kme->Emosional >= 7 && $data_kme->Emosional <= 10)
                                    <tr>
                                        <th  class="text-left">a.</th>
                                        <th colspan="3" class="text-left">Gejala Emosional <i>*Kondisi perasaan anak terhadap individu</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Emosional}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Abnormal</td>
                                    </tr>
                                @endif

                                @if ($data_kme->Perilaku >= 0 && $data_kme->Perilaku <= 3)
                                    <tr>
                                        <th  class="text-left">b.</th>
                                        <th colspan="4" class="text-left">Masalah Perilaku <i>*Kondisi tingkah laku dan sifat anak sehari hari</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Perilaku}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Normal</td>
                                    </tr>
                                @elseif ($data_kme->Perilaku >= 4 && $data_kme->Perilaku <= 4)
                                    <tr>
                                        <th  class="text-left">b.</th>
                                        <th colspan="4" class="text-left">Masalah Perilaku <i>*Kondisi tingkah laku dan sifat anak sehari hari</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Perilaku}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Borderline</td>
                                    </tr>
                                @elseif ($data_kme->Perilaku >= 5 && $data_kme->Perilaku <= 10)
                                    <tr>
                                        <th  class="text-left">b.</th>
                                        <th colspan="4" class="text-left">Masalah Perilaku <i>*Kondisi tingkah laku dan sifat anak sehari hari</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Perilaku}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Abnormal</td>
                                    </tr>
                                @endif

                                @if ($data_kme->Hiperaktif >= 0 && $data_kme->Hiperaktif <= 5)
                                    <tr>
                                        <th  class="text-left">c.</th>
                                        <th colspan="4" class="text-left">Hiperaktivitas <i>*Gangguan pemusatan perhatian (mudah teralihkan konsentrasinya)</i> </th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Hiperaktif}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Normal</td>
                                    </tr>
                                @elseif ($data_kme->Hiperaktif >= 6 && $data_kme->Hiperaktif <= 6)
                                    <tr>
                                        <th  class="text-left">c.</th>
                                        <th colspan="4" class="text-left">Hiperaktivitas <i>*Gangguan pemusatan perhatian (mudah teralihkan konsentrasinya)</i> </th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Hiperaktif}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Borderline</td>
                                    </tr>
                                @elseif ($data_kme->Hiperaktif >= 7 && $data_kme->Hiperaktif <= 10)
                                    <tr>
                                        <th  class="text-left">c.</th>
                                        <th colspan="4" class="text-left">Hiperaktivitas <i>*Gangguan pemusatan perhatian (mudah teralihkan konsentrasinya)</i> </th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Hiperaktif}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Abnormal</td>
                                    </tr>
                                @endif

                                @if ($data_kme->Teman_sebaya >= 0 && $data_kme->Teman_sebaya <= 3)
                                    <tr>
                                        <th  class="text-left">d.</th>
                                        <th colspan="4" class="text-left">Masalah Teman Sebaya <i>*Kondisi anak yang memiliki masalah dalam pertemanan dengan anak seusianya</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Teman_sebaya}}</td>
                                        <td rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Normal</td>
                                    </tr>
                                @elseif ($data_kme->Teman_sebaya >= 4 && $data_kme->Teman_sebaya <= 5)
                                    <tr>
                                        <th  class="text-left">d.</th>
                                        <th colspan="4" class="text-left">Masalah Teman Sebaya <i>*Kondisi anak yang memiliki masalah dalam pertemanan dengan anak seusianya</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Teman_sebaya}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Borderline</td>
                                    </tr>
                                @elseif ($data_kme->Teman_sebaya >= 6 && $data_kme->Teman_sebaya <= 10)
                                    <tr>
                                        <th  class="text-left">d.</th>
                                        <th colspan="4" class="text-left">Masalah Teman Sebaya <i>*Kondisi anak yang memiliki masalah dalam pertemanan dengan anak seusianya</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Teman_sebaya}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Abnormal</td>
                                    </tr>
                                @endif

                                <tr>
                                    <th colspan="4" class="text-left">KESIMPULAN</i></th>
                                </tr>
                                <tr>
                                    <th rowspan="4"></th>
                                    <th>SKOR</th>
                                    @if ($data_kme->Total >= 0 && $data_kme->Total <= 15)
                                        <th>{{$data_kme->Total}}</th>
                                        <th class="upper">{{'SISWA ATAS NAMA'. ' ' . $data_siswa->nama. ' ' . 'ABNORMAL'}}</th>
                                    @elseif ($data_kme->Total >= 16 && $data_kme->Total <= 19)
                                        <th>{{$data_kme->Total}}</th>
                                        <th class="upper">{{'SISWA ATAS NAMA'. ' ' . $data_siswa->nama. ' ' . 'ABNORMAL'}}</th>
                                    @elseif ($data_kme->Total >= 20 && $data_kme->Total <= 40)
                                        <th>{{$data_kme->Total}}</th>
                                        <th class="upper">{{'SISWA ATAS NAMA'. ' ' . $data_siswa->nama. ' ' . 'ABNORMAL'}}</th>
                                    @endif
                                </tr>
                            </thead>
                        </table>

                        <table class="table table-bordered font-weight-bold" id="data_table" width="100%" cellspacing="0">
                            <thead  class="text-left">
                                @if ($data_kme->Sosial >= 6 && $data_kme->Sosial <= 10)
                                <tr>
                                    <th colspan="4" class="text-left">B. KEKUATAN</th>
                                </tr>
                                    <tr>
                                        <th  class="text-left">a.</th>
                                        <th colspan="3" class="text-left">Prososial <i>*Kondisi kepekaan anak terhadap lingkungan sekitar</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Sosial}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Normal</td>
                                    </tr>
                                @elseif ($data_kme->Sosial >= 5 && $data_kme->Sosial <= 5)
                                    <tr>
                                        <th colspan="4" class="text-left">B. KEKUATAN</th>
                                    </tr>
                                    <tr>
                                        <th  class="text-left">a.</th>
                                        <th colspan="3" class="text-left">Prososial <i>*Kondisi kepekaan anak terhadap lingkungan sekitar</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Sosial}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Borderline</td>
                                    </tr>
                                @elseif ($data_kme->Sosial >= 0 && $data_kme->Sosial <= 4)
                                    <tr>
                                        <th colspan="4" class="text-left">B. KEKUATAN</th>
                                    </tr>
                                    <tr>
                                        <th  class="text-left">a.</th>
                                        <th colspan="3" class="text-left">Prososial <i>*Kondisi kepekaan anak terhadap lingkungan sekitar</i></th>
                                    </tr>
                                    <tr class="text-center">
                                        <th rowspan="4"></th>
                                        <th colspan="2">Perolehan</th>
                                        <th>Keterangan</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">{{$data_kme->Sosial}}</td>
                                        <td  rowspan="3">
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
                                        <td colspan="2" class="text-center">Kategori</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" class="text-center">Abnormal</td>
                                    </tr>
                                @endif
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <h5 class="pt-4"></h5>
            <h6 class="text-right pt-4 font-weight-bold">Kepala SMK Wikrama 1 Garut,</h6>
            <h5 class="pt-4"></h5>
            <h5 class="pt-4"></h5>
            <h5 class="text-right pt-4">(__________________________)</h5>
        </div>
    </div>
</div>
@endsection
