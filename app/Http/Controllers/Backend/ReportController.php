<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Rekap_do;
use App\Models\Rekap_gb;
use App\Models\Rekap_kme;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;


class ReportController extends Controller
{
    public function index()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        if(request()->ajax()){
            $data = Siswa::latest();
            return Datatables::of($data)
            ->addColumn('action', function($data){
                $btn = '<a href="'.route("panel.admin.show.report", ['user_id' => $data->user_id]).'" class="btn btn-primary btn-sm btn-show" id="show" data-id="'.$data->user_id.'">
                            <span class="btn-inner--icon"><i class="fas fa-eye"></i>  Show Report</span>
                        </a>';
                return $btn;
            })
            ->make(true);
        }
        return view('backend.report.index');
    }

    public function showRapot($user_id)
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $dataSiswa = Siswa::where('user_id', $user_id)->first();

        $data_kme = Rekap_kme::where('user_id', $user_id)->first();
        $data_gb = Rekap_gb::where('user_id', $user_id)->first();
        $data_do = Rekap_do::where('user_id', $user_id)->first();

        $dominasiOtak = 20 - $data_do->Dominasi_otak ;

        return view('backend.report.rapot', compact('data_kme', 'data_do', 'data_gb', 'dominasiOtak', 'dataSiswa'));
    }

    public function cetakRapot($user_id)
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $data_siswa = Siswa::where('user_id', $user_id)->first();
        $data_kme = Rekap_kme::where('user_id', $user_id)->first();
        $data_gb = Rekap_gb::where('user_id', $user_id)->first();
        $data_do = Rekap_do::where('user_id', $user_id)->first();

        return view('backend.cetak.index', compact('data_kme', 'data_do', 'data_gb', 'data_siswa'));
    }
}
