<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calcul extends Controller
{
    public function showForm()
    {
        return view('calcul');
    }




    public function showResult(Request $request)
    {

        $amount = $request->amount;
        $tva = $request->taux;
        $htttc = $request->htttc;

        $newAmount = $amount  * (1 + $tva / 100);
        $newAmount2 = $amount / (1 + ($tva / 100));

        $result = ['Montant HT' => $amount, 'Taux de TVA' => $tva, 'Montant TTC' => $newAmount];
        $result2 = ['Montant TTC' => $amount, 'Taux de TVA' => $tva, 'Montant HT' => $newAmount2];

        if ($htttc == 'TTC') {
            return view('recap', ['list' => $result2]);
        } else {
            return view('recap', ['list' => $result]);
        }
    }
}
