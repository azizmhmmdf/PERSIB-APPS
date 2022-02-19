<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Dataset;
use App\Models\Rekap_kme;

class PredictionController extends Controller
{
    public function index($user_id)
    {
        if (!Auth::user()->level == 'admin') {
            abort(403, 'Unauthorized action.');
        }

        $rekap = Rekap_kme::where('user_id', $user_id)->first();
        $dataset = Dataset::all();

        return view('backend.prediction.index', compact('rekap', 'dataset'));
    }
}
