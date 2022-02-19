<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Dataset;
use App\Models\Siswa;
use App\Models\Rekap_kme;
use App\Imports\importDataset;

class DatasetController extends Controller
{
    public function index()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        if(request()->ajax()){
            $rekap_kme = Rekap_kme::all();
            $data = Siswa::latest();
            return Datatables::of($data)
            ->addColumn('action', function($rekap_kme){
                $btn = '<a href="'.route("panel.admin.index", ['user_id' => $rekap_kme->user_id]).'" class="btn btn-primary btn-sm btn-show" id="show">
                            <span class="btn-inner--icon"><i class="fas fa-eye"></i>  Show Prediction</span>
                        </a>';
                return $btn;
            })
            ->make(true);
        }

        // dd($rekap_kme);
        return view('backend.dataset.index');
    }

    public function getDataset()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        if(request()->ajax()){
            $dataset = Dataset::all();
            $rekap = Rekap_kme::all();
            return Datatables::of($dataset)
            ->editColumn('hasil', function($dataset){
                if ($dataset->hasil == 'Baik'){
                    return '<button class="btn btn-success btn-sm">Baik</button>';
                }elseif($dataset->hasil == 'Kurang'){
                    return '<button class="btn btn-danger btn-sm">Kurang</button>';
                }
            })
            ->rawColumns(['hasil'])
            ->make(true);
        }

        return view('backend.dataset.dataset');
    }

    public function importExcel(Request $request)
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
        $import = Excel::import(new importDataset(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('panel.admin.dataset')->with(['toast_success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('panel.admin.dataset')->with(['toast_error' => 'Data Gagal Diimport!']);
        }
    }
}
