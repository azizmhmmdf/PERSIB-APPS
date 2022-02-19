<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Models\Siswa;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class DatapenggunaController extends Controller
{
    public function listAccountStudent()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            $data = User::where('level', 'siswa')->get();
            return Datatables::of($data)
            ->addColumn('action', function($data) {
                $btn =
                    '<a href="'.route("panel.admin.editAccountStudent", ['id' => $data->id]).'" class="btn btn-warning btn-sm btn-show" id="show">
                        <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                    </a>

                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-toggle="modal" data-target="#deleteDataPengguna" data-id="'.$data->id.'" data-name="'.$data->name.'" data-email="'.$data->email.'" data-level="'.$data->level.'" data-password="'.$data->password.'">
                        <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                    </button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('backend.data-pengguna.index');
    }

    public function addAccountStudent()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        return view('backend.data-pengguna.add');
    }

    public function postAddAccountStudent(Request $request)
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $validasi = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'nama' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'nis' => ['required', 'min:8', 'unique:siswas'],
            'rombel' => ['required'],
            'rayon' => ['required'],
            'no_hp' => ['required'],
        ]);

        if($validasi->fails()){
            return back()->with('toast_error', $validasi->messages()->all()[0])->withInput();
        }else{
            $user = User::create([
                'name'=> $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $email = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ];

            $email =  Mail::to($request->email)->send(new Email($email));

            $siswa = Siswa::create([
                'user_id' => $user->id,
                'nama' => $request->nama,
                'nis' => $request->nis,
                'rombel' => $request->rombel,
                'rayon' => $request->rayon,
                'no_hp' => $request->no_hp,
            ]);
        }

        return redirect()->route('panel.admin.list')->with('toast_success', 'Successfully Add Account');
    }

    public function editAccountStudent($id)
    {
        $data = User::where('id', $id)->first();
        return view('backend.data-pengguna.edit', compact('data'));
    }

    public function updateAccountStudent(Request $request, $id)
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $validasi = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

            $update = User::where('id', $id)->update([
                'name'=> $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);

            $email = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
            ];

            $email =  Mail::to($request->email)->send(new Email($email));

        return redirect()->route('panel.admin.list')->with('toast_success', 'Successfully Update Account');
    }

    public function deleteAccountStudent($id)
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $delete = User::destroy($id);

        return redirect()->route('panel.admin.list')->with('toast_success', 'Successfully Delete Account');
    }

    public function getImportSiswa()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {
            $data = Siswa::latest();
            return Datatables::of($data)
            ->addColumn('action', function($data) {
                $btn =
                    '<button type="button" class="btn btn-primary btn-sm btn-update" data-toggle="modal" data-target="#editDataPengguna" data-id="'.$data->id.'" data-name="'.$data->name.'" data-email="'.$data->email.'" data-level="'.$data->level.'" data-password="'.$data->password.'">
                        <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                    </button>

                    <button type="button" class="btn btn-danger btn-sm btn-delete" data-toggle="modal" data-target="#deleteDataPengguna" data-id="'.$data->id.'" data-name="'.$data->name.'" data-email="'.$data->email.'" data-level="'.$data->level.'" data-password="'.$data->password.'">
                        <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                    </button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }

        return view('backend.siswa.index');
    }

    public function importSiswa(Request $request)
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = time(). '-' . $file->getClientOriginalName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new SiswaImport(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('panel.admin.list.student')->with('toast_success', 'Successfully');
        } else {
            //redirect
            return redirect()->route('panel.admin.list.student')->with('toast_success', 'Failed');
        }
    }
}
