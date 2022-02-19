<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DominasiOtak;
use App\Models\GayaBelajar;
use App\Models\KesehatanMental;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dominasiOtak = DominasiOtak::where('user_id', Auth::user()->id)->first();
        $gayaBelajar = GayaBelajar::where('user_id', Auth::user()->id)->first();
        $kesehatanMental = KesehatanMental::where('user_id', Auth::user()->id)->first();
        // dd($gayaBelajar);
        if(Auth::user()->level == 'admin'){
            return redirect()->route('panel.admin.dashboard');
        }elseif(Auth::user()->level == 'siswa'){
            return view('home', ['kesehatanMental' => $kesehatanMental, 'dominasiOtak' => $dominasiOtak, 'gayaBelajar' => $gayaBelajar]);
        }
    }
}
