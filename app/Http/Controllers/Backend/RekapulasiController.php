<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Rekap_gb;
use App\Models\Rekap_kme;
use App\Models\Rekap_do;
use Yajra\DataTables\Facades\DataTables;

class RekapulasiController extends Controller
{
    public function index()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        if (request()->ajax()) {

            $data = User::select('*')
            ->join('gb', 'users.id', '=', 'gb.user_id')
            ->join('do', 'users.id', '=', 'do.user_id')
            ->join('kme', 'users.id', '=', 'kme.user_id')
            ->where('level' ,'=', 'siswa')
            ->limit(100)
            ->get();
            return Datatables::of($data)
            ->make(true);
        }
        return view('backend.rekapulasi.index');
    }
}
