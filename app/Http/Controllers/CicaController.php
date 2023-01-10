<?php

namespace App\Http\Controllers;

use App\Models\Cica;
use Illuminate\Http\Request;

class CicaController extends Controller
{
    //
    public function index(){
        $cicak =  Cica::all();
        return $cicak;
    }

    public function cicaKeres($id){
        $cicak = Cica::find($id);
        return $cicak;
    }

    public function destroy($id){
        Cica::find($id)
        ->delete();
    }

    public function ujCica(Request $request){
        $cica = new Cica();
        $cica->neve = $request->neve;
        $cica->neme = $request->neme;
        $cica->fajta = $request->fajta;
        $cica->kora = $request->kora;
        $cica->sulya = $request->kora;
        $cica->gazda_neve = $request->gazda_neve;
        $cica->gazda_lakcim = $request->gazda_lakcim;
        $cica->save();
    }
}
