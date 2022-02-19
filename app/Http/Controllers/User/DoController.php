<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DominasiOtak;
use App\Models\Rekap_do;
use Illuminate\Support\Facades\Auth;

class DoController extends Controller
{
    public function index()
    {
        return view('user.do.index');
    }

    public function dominasiotak(Request $request)
    {
        $validasi = $request->validate([
            'do1' => 'required',
            'do2' => 'required',
            'do3' => 'required',
            'do4' => 'required',
            'do5' => 'required',
            'do6' => 'required',
            'do7' => 'required',
            'do8' => 'required',
            'do9' => 'required',
            'do10' => 'required',
            'do11' => 'required',
            'do12' => 'required',
            'do13' => 'required',
            'do14' => 'required',
            'do15' => 'required',
            'do16' => 'required',
            'do17' => 'required',
            'do18' => 'required',
            'do19' => 'required',
            'do20' => 'required',
        ]);

        $dominasiOtak = DominasiOtak::create([
            'user_id' => Auth::user()->id,
            'do1' => $request->do1,
            'do2' => $request->do2,
            'do3' => $request->do3,
            'do4' => $request->do4,
            'do5' => $request->do5,
            'do6' => $request->do6,
            'do7' => $request->do7,
            'do8' => $request->do8,
            'do9' => $request->do9,
            'do10' => $request->do10,
            'do11' => $request->do11,
            'do12' => $request->do12,
            'do13' => $request->do13,
            'do14' => $request->do14,
            'do15' => $request->do15,
            'do16' => $request->do16,
            'do17' => $request->do17,
            'do18' => $request->do18,
            'do19' => $request->do19,
            'do20' => $request->do20,
        ]);

        return redirect()->route('home')->with('toast_success', 'Successfully');
    }
}
