<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KesehatanMental;
use App\Models\Rekap_kme;
use Illuminate\Support\Facades\Auth;

class KmeController extends Controller
{
    public function index()
    {
        return view('user.kme.index');
    }

    public function kesehatanmental(Request $request)
    {
        $validasi = $request->validate([
            'kme1' => 'required',
            'kme2' => 'required',
            'kme3' => 'required',
            'kme4' => 'required',
            'kme5' => 'required',
            'kme6' => 'required',
            'kme7' => 'required',
            'kme8' => 'required',
            'kme9' => 'required',
            'kme10' => 'required',
            'kme11' => 'required',
            'kme12' => 'required',
            'kme13' => 'required',
            'kme14' => 'required',
            'kme15' => 'required',
            'kme16' => 'required',
            'kme17' => 'required',
            'kme18' => 'required',
            'kme19' => 'required',
            'kme20' => 'required',
            'kme21' => 'required',
            'kme22' => 'required',
            'kme23' => 'required',
            'kme25' => 'required',
            'kme25' => 'required',
        ]);

        $KesehatanMental = KesehatanMental::create([
            'user_id' => Auth::user()->id,
            'kme1' => $request->kme1,
            'kme2' => $request->kme2,
            'kme3' => $request->kme3,
            'kme4' => $request->kme4,
            'kme5' => $request->kme5,
            'kme6' => $request->kme6,
            'kme7' => $request->kme7,
            'kme8' => $request->kme8,
            'kme9' => $request->kme9,
            'kme10' => $request->kme10,
            'kme11' => $request->kme11,
            'kme12' => $request->kme12,
            'kme13' => $request->kme13,
            'kme14' => $request->kme14,
            'kme15' => $request->kme15,
            'kme16' => $request->kme16,
            'kme17' => $request->kme17,
            'kme18' => $request->kme18,
            'kme19' => $request->kme19,
            'kme20' => $request->kme20,
            'kme21' => $request->kme21,
            'kme22' => $request->kme22,
            'kme23' => $request->kme23,
            'kme24' => $request->kme24,
            'kme25' => $request->kme25,
        ]);

        return redirect()->route('home')->with('toast_success', 'Successfully');
    }
}
