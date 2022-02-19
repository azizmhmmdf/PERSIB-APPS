@extends('backend.layout.main')
@section('title', 'Dataset')
@section('page-heading', 'Dataset')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="d-sm-flex align-items-center justify-content-between mb-4" data-toggle="modal" data-target="#importExcel">
                <h1 class="h3 mb-0 text-gray-800"></h1>
                <button type="button" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fas fa-file-excel text-white-50"></i> Import</button>
            </div>
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
                            <thead class="thead-dark">
                                <tr class="text-primary">
                                    <th>ID</th>
                                    <th>NAMA</th>
                                    <th class="text-danger">E</th>
                                    <th class="text-primary">C</th>
                                    <th class="text-warning">H</th>
                                    <th class="text-info">P</th>
                                    <th class="text-success">PR</th>
                                    <th>RESULT</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- modal import --}}
<div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">IMPORT DATA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('panel.admin.import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>SELECT FILE</label>
                        <input type="file" name="file" class="form-control-file" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Import</button>
                </div>
            </form>
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
                "url": "{{ route('panel.admin.dataset') }}",
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
                { data: 'hasil', name: 'hasil'},
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


