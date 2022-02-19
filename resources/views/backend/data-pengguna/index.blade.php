@extends('backend.layout.main')
@section('title', 'Daftar Data Siswa')
@section('page-heading', 'Daftar Data Siswa ')
@section('content')

<div class="container-fluid">
    @if (session('success_message'))
        <div class="alert alert-success">
            {{session('success_message')}}
        </div>
    @endif
    {{-- data table --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{route('panel.admin.addAccountStudent')}}" class=" m-0 font-weight-bold text-white btn btn-primary btn-sm float-right">
                <i class="fas fa-plus"></i>
                Tambah Siswa
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="data_table" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-primary">
                            <th>ID</th>
                            <th>NAME</th>
                            <th>EMAIL</th>
                            <th>ROLE</th>
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

{{-- <!-- Modal update data pengguna-->
<div class="modal fade" id="editDataPengguna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Data Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form-update" method="POST">
                    @method('patch')
                    @csrf
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" value="{{old('email')}}" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="level" id="level">
                                <option >Pilih...</option>
                                <option value="admin" {{old('level') == 'admin' ? 'selected' : ''}}>Admin</option>
                                <option value="siswa" {{old('level') == 'siswa' ? 'selected' : ''}}>Siswa</option>
                                <option value="ortu" {{old('level') == 'ortu' ? 'selected' : ''}}>Orang Tua</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="old_password" class="col-sm-2 col-form-label">Old Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="old_password" class="form-control"  id="old_password" placeholder="Old Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password-confirm" class="col-sm-2 col-form-label">Confirm Password</label>
                        <div class="col-sm-10">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                    </div>
                    <div class="footer">
                        <button type="submit" class="btn btn-primary btn-sm float-right">
                            <i class="fas fa-check"></i>
                            Sumbit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}

<!-- Modal delete delete -->
<div class="modal fade" id="deleteDataPengguna" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Social Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="post" id="form-delete">
                @method('delete')
                @csrf
                <div class="modal-body">
                    Are you sure you want to delete it ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            <a href=""></a>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="text/javascript">
    $(document).ready( function(){
        data_table = $('#data_table').DataTable({
            processing: true,
            serverSide: true,
            "ajax": {
                "url": "{{ route('panel.admin.list') }}",
            },
            columnDefs: [ {
                "targets": [1],
                "orderable": true,
                "searchable": true
            }],
            columns: [
                { data: 'id', name: 'id'},
                { data: 'name', name: 'name'},
                { data: 'email', name: 'email'},
                { data: 'level', name: 'level'},
                { data: 'action', name: 'action'},
            ],
            language: {
                paginate: {
                    next: '&#8594;', // or '→'
                    previous: '&#8592;' // or '←'
                }
            }
        });
    })
    $(document).on('click', '.btn-delete', function(){
        const id = $(this).data('id')
        $('#form-delete').attr('action', "{{ url('panel/admin/userData/deleteAccounStudent') }}/"+id);
    })

    // $(document).on('click', '.btn-update', function() {
    //     const id = $(this).data('id');
    //     const name = $(this).data('name');
    //     const email = $(this).data('email');
    //     const level = $(this).data('level');
    //     $('#name').val(name);
    //     $('#email').val(email);
    //     $('#password').val(password);
    //     $('#level').val(level);
    //     $('#form-update').attr('action', "{{ url('panel/admin/updateAccountStudent') }}/"+id);
    // })


    setTimeout(function() {
        $('.alert').fadeOut('fast');
    }, 4000); // <-- time in milliseconds

</script>
@endsection

