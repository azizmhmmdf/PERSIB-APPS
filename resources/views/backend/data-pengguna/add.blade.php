@extends('backend.layout.main')
@section('title', 'Tambah Data Siswa')
@section('page-heading', 'Tambah Data Siswa')
@section('content')
@if (count($errors) > 0)
    <div class="alert alert-denger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h5 class="m-0 pt-2 font-weight-bold text-primary">Tambah Data Siswa</h5>
            </div>
            <div class="col">
                <a href="{{route('panel.admin.list')}}" class="btn btn-danger btn-sm float-right">
                    <i class="fas fa-angle-left"></i>
                    Back
                </a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="{{route('panel.admin.post.addAccountStudent')}}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" value="{{old('nama')}}" id="name" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label for="nis" class="col-sm-2 col-form-label">NIS</label>
                <div class="col-sm-10">
                    <input type="number" name="nis" class="form-control" value="{{old('nis')}}" id="nis" placeholder="NIS">
                </div>
            </div>
            <div class="form-group row">
                <label for="rombel" class="col-sm-2 col-form-label">Rombel</label>
                <div class="col-sm-10">
                    <input type="text" name="rombel" class="form-control" value="{{old('rombel')}}" id="rombel" placeholder="Rombel">
                </div>
            </div>
            <div class="form-group row">
                <label for="rayon" class="col-sm-2 col-form-label">Rayon</label>
                <div class="col-sm-10">
                    <input type="text" name="rayon" class="form-control" value="{{old('rayon')}}" id="rayon" placeholder="rayon">
                </div>
            </div>
            <div class="form-group row">
                <label for="rayon" class="col-sm-2 col-form-label">Nomor HP</label>
                <div class="col-sm-10">
                    <input type="number" name="no_hp" class="form-control" value="{{old('no_hp')}}" id="no_hp" placeholder="Nomor HP">
                </div>
            </div>
    </div>
</div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
                <h5 class="m-0 pt-3 font-weight-bold text-primary">Tambah Akun Siswa</h5>
            </div>
        </div>
    </div>
    <div class="card-body">
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
                <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" value="{{old('password')}}" id="password" placeholder="Password">
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
                <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
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
@include('sweetalert::alert')
@endsection


