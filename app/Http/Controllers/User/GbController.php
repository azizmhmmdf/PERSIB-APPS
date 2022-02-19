<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GayaBelajar;
use App\Models\Rekap_gb;
use Illuminate\Support\Facades\Auth;

class GbController extends Controller
{
    public function index()
    {
        return view('user.gb.index');
    }

    public function gayabelajar(Request $request)
    {
        $validasi = $request->validate([
            'gb1' => 'required',
            'gb2' => 'required',
            'gb3' => 'required',
            'gb4' => 'required',
            'gb5' => 'required',
            'gb6' => 'required',
            'gb7' => 'required',
            'gb8' => 'required',
            'gb9' => 'required',
            'gb10' => 'required',
            'gb11' => 'required',
            'gb12' => 'required',
            'gb13' => 'required',
            'gb14' => 'required',
            'gb15' => 'required',
            'gb16' => 'required',
            'gb17' => 'required',
            'gb18' => 'required',
            'gb19' => 'required',
            'gb20' => 'required',
            'gb21' => 'required',
            'gb22' => 'required',
            'gb23' => 'required',
            'gb24' => 'required',
        ]);

            $gayabelajar = GayaBelajar::create([
                'user_id' => Auth::user()->id,
                'gb1' => $request->gb1,
                'gb2' => $request->gb2,
                'gb3' => $request->gb3,
                'gb4' => $request->gb4,
                'gb5' => $request->gb5,
                'gb6' => $request->gb6,
                'gb7' => $request->gb7,
                'gb8' => $request->gb8,
                'gb9' => $request->gb9,
                'gb10' => $request->gb10,
                'gb11' => $request->gb11,
                'gb12' => $request->gb12,
                'gb13' => $request->gb13,
                'gb14' => $request->gb14,
                'gb15' => $request->gb15,
                'gb16' => $request->gb16,
                'gb17' => $request->gb17,
                'gb18' => $request->gb18,
                'gb19' => $request->gb19,
                'gb20' => $request->gb20,
                'gb21' => $request->gb21,
                'gb22' => $request->gb22,
                'gb23' => $request->gb23,
                'gb24' => $request->gb24,
            ]);

        return redirect()->route('home')->with('toast_success', 'Successfully');

    }
}
