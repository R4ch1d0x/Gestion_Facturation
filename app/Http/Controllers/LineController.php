<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Line;
use App\Models\Facture;


class LineController extends Controller
{
    //

    public function insertline(Request $request,$facture_id){
        Line::create(
            [
                    'facture_id'=> $facture_id,
                    'qte'=> $request->qte,
                    'description'=> $request->description,
                    'taxes'=> $request->taxes,
                    'montant_ht'=> $request->montant_ht,
            ]
            
        );
            return redirect("/facture");
    }
}
