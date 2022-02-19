@extends('backend.layout.main')
@section('title', 'Rekap Jawaban Siswa')
@section('page-heading', 'Rekap Jawaban Siswa')
@section('content')

<div class="container-fluid">
    @if (session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    {{-- data table --}}
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <a href="{{route('panel.admin.addAccountStudent')}}" class=" m-0 font-weight-bold text-white btn btn-primary btn-sm float-right">
                <i class="fas fa-plus"></i>
                Add User
            </a>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="data_table" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th class="text-with">NAME</th>
                            <th class="text-danger">GB A</th>
                            <th class="text-danger">GB V</th>
                            <th class="text-danger">GB K</th>
                            <th class="text-warning">DO</th>
                            <th class="text-primary">KS E</th>
                            <th class="text-primary">KS C</th>
                            <th class="text-primary">KS H</th>
                            <th class="text-primary">KS T</th>
                            <th>T KELEMAHAN</th>
                            <th>T PROSOSIAL</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready( function(){
        data_table = $('#data_table').DataTable({
            processing: true,
            serverSide: true,
            "ajax": {
                "url": "{{ route('panel.admin.recap.index') }}",
            },
            columnDefs: [{
                "targets": [1],
                "orderable": true,
                "searchable": true
            }],
            columns: [
                { data: 'name', name: 'name'},
                { data: 'Auditori', name: 'gb a'},
                { data: 'Visual', name: 'gb v'},
                { data: 'Kinestetik', name: 'gb k'},
                { data: 'Dominasi_otak', name: 'do'},
                { data: 'Emosional', name: 'ks e'},
                { data: 'Perilaku', name: 'ks c'},
                { data: 'Hiperaktif', name: 'ks h'},
                { data: 'Total', name: 'ks t'},
                { data: 'Teman_sebaya', name: 't kelemahan'},
                { data: 'Sosial', name: 't prososial'},
            ],
            language: {
                paginate: {
                    next: '&#8594;', // or '→'
                    previous: '&#8592;' // or '←'
                }
            }
        });
    })
</script>
@endsection


