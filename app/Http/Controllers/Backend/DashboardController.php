<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rekap_gb;
use App\Models\Rekap_do;
use App\Models\Rekap_kme;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('admin');
    }

    public function index()
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }
        $gb = Rekap_gb::all();
        $do = Rekap_do::all();
        $kme = Rekap_kme::all();

        return view('backend.dashboard', compact('gb', 'do', 'kme'));
    }
}
