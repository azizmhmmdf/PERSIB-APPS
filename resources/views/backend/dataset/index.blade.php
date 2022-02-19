@extends('backend.layout.main')
@section('title', 'Hasil Prediksi')
@section('page-heading', 'Hasil Prediksi')
@section('content')
<div class="container-fluid">
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
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-primary">
                            <th>NAMA</th>
                            <th>NIS</th>
                            <th>ROMBEL</th>
                            <th>RAYON</th>
                            <th>NOMOR TELEPON</th>
                            <th>ACTION</th>
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
                "url": "{{ route('panel.admin.prediction') }}",
            },
            columnDefs: [{
                "targets": [1],
                "orderable": true,
                "searchable": true
            }],
            columns: [
                { data: 'nama', name: 'nama'},
                { data: 'nis', name: 'nis'},
                { data: 'rombel', name: 'rombel'},
                { data: 'rayon', name: 'rayon'},
                { data: 'no_hp', name: 'no_hp'},
                { data: 'action', name: 'action'},
            ],
            language: {
                paginate: {
                    next: '&#8594;', // or '→'
                    previous: '&#8592;' // or '←'
                }
            }
        });

        // $(document).on('click', '.btn-show', function(){
        //     const id = $(this).data('id')
        //     $('#show').attr('href', "{{ url('panel/admin/report/show-rapot') }}/"+id);
        // })
    })
</script>
@endsection


