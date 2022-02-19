@extends('backend.layout.main')
@section('title', 'Prediksi Siswa')
@section('page-heading', 'Prediksi Siswa ')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            @if($message = Session::get('toast_success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @elseif($message =  Session::get('toast_error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endif
            {{-- data table --}}
            <div class="card shadow mb-4">
                <div class="card-body">
                    <h4>Target</h4>
                    <h6>siswa yang di prediksi adalah {{$rekap->User->name}} dengan data sebagai berikut :</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center my-4" id="data_table" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr class="text-primary">
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th class="text-danger">E</th>
                                    <th class="text-primary">C</th>
                                    <th class="text-warning">H</th>
                                    <th class="text-info">P</th>
                                    <th class="text-success">PR</th>
                                    {{-- <th data-field="distance" data-sortable="true" data-sort-name="distance">DISTANCE</th> --}}
                                    {{-- <th>RESULT</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{$rekap->id}}</th>
                                    <th>{{$rekap->User->name}}</th>
                                    <th class="text-danger">{{$rekap->Emosional}}</th>
                                    <th class="text-primary">{{$rekap->Teman_sebaya}}</th>
                                    <th class="text-warning">{{$rekap->Hiperaktif}}</th>
                                    <th class="text-info">{{$rekap->Perilaku}}</th>
                                    <th class="text-success">{{$rekap->Sosial}}</th>
                                </tr>
                            </tbody>
                        </table>
                        <br/>
                        <h4>Hasil Prediksi</h4>
                        <h6>Berdasarkan hasil algoritma sistem predisi menggunakan K-NN, maka didapat data berikut yang telah di urutkan berdasarkan data teratas dengan siswa yang di prediksi</h6>
                        <p>*Silahkan ambil 5 data termirip untuk diambil kesimpulan</p>
                        <table class="table table-bordered text-center" id="data_prediksi" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr class="text-primary">
                                    <th>NAMA</th>
                                    <th class="text-danger">E</th>
                                    <th class="text-primary">C</th>
                                    <th class="text-warning">H</th>
                                    <th class="text-info">P</th>
                                    <th class="text-success">PR</th>
                                    <th data-field="distance" data-sortable="true" data-sort-name="distance">DISTANCE</th>
                                    <th>RESULT</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0; $i < count($dataset); $i++)
                                    <tr>
                                        <th>{{$dataset[$i]->nama}}</th>
                                        <th class="text-danger">{{$dataset[$i]->emosional}}</th>
                                        <th class="text-primary">{{$dataset[$i]->temansebaya}}</th>
                                        <th class="text-warning">{{$dataset[$i]->hiperaktif}}</th>
                                        <th class="text-info">{{$dataset[$i]->perilaku}}</th>
                                        <th class="text-success">{{$dataset[$i]->sosial}}</th>
                                        <th class="text-success">
                                            {{number_format((float)
                                                sqrt (
                                                    pow(($dataset[$i]['emosional'] - $rekap->Emosional),2) +
                                                    pow(($dataset[$i]['perilaku'] - $rekap->Perilaku),2) +
                                                    pow(($dataset[$i]['hiperaktif'] - $rekap->Hiperaktif),2) +
                                                    pow(($dataset[$i]['temansebaya'] - $rekap->Teman_sebaya),2) +
                                                    pow(($dataset[$i]['sosial'] - $rekap->Sosial),2))
                                                , 2 , '.', '' );}}

                                        </th>
                                        <th class="text-success">
                                            @if ($dataset[$i]->hasil == 'Baik')
                                                <button class="btn btn-success">{{$dataset[$i]->hasil}}</button>
                                            @elseif ($dataset[$i]->hasil == 'Kurang')
                                                <button class="btn btn-danger">{{$dataset[$i]->hasil}}</button>
                                            @endif
                                        </th>
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@include('sweetalert::alert')
@endsection
@section('js')
{{-- <script type="text/javascript">
    $(document).ready( function(){
        data_table = $('#data_table').DataTable({
            processing: true,
            serverSide: true,
            "ajax": {
                "url": "{{ route('panel.admin.index', ['user_id' => $user_id]) }}" ,
            },
            columnDefs: [{
                "targets": [1],
                "orderable": true,
                "searchable": true
            }],
            columns: [
                { data: 'id', name: 'id'},
                { data: 'nama', name: 'nama'},
                { data: 'emosional', name: 'emosional'},
                { data: 'sosial', name: 'sosial'},
                { data: 'hiperaktif', name: 'hiperaktif'},
                { data: 'temansebaya', name: 'temansebaya'},
                { data: 'perilaku', name: 'perilaku'},
                // { data: 'distance', name: 'distance'},
                // { data: 'hasil', name: 'hasil'},
            ],
            language: {
                paginate: {
                    next: '&#8594;', // or '→'
                    previous: '&#8592;' // or '←'
                }
            }
        });
    })
</script> --}}
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#data_prediksi').DataTable({
        "order": [[ 6, "asc" ]],
        "scrollY": "280px",
        "paging": false,
        'search': {
            return: false
        }
        });
    } );
</script>
@endsection



