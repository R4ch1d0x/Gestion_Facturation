<?php

namespace App\Http\Controllers;

use App\Models\Facture;
use App\Models\Line;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\FacturesExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class FactureController extends Controller
{

    public function getFromDataDB(){
         $f = DB::table('Factures')->paginate(10);
        return view('facture/facture', ['factures' => $f]);
    }

    public function insertFacture(Request $request){

        $request->validate([
            'id'=>'required',
            'code_facture'=>'required',
            'client_id'=>'required',
            'prix_hors_taxes'=>'required',
            'tva'=>'required',
            'status'=>'required',
            'echéance'=>'required',
            'description'=>'required',
            'taxes'=>'required',
            'montant_ht'=>'required',
            'prix_total'=>'required'
        ]);
        Facture::create(array_merge($request->all(), [
            'id'=>$request->id,
            'code_facture'=>$request->code_facture,
            'client_id'=>$request->client_id,
            'prix_hors_taxes'=>$request->prix_hors_taxes,
            'tva'=>$request->tva,
            'status'=>$request->status,
            'echéance'=>$request->echéance,
            'prix_total'=>$request->prix_total
            ]));
            return redirect("/facture")->with('success' , 'facture a bien été ajouter avec succes');


        /* $request["echéance"] = $request->date("echéance");
        // dd($request);
        Facture::create($validatedate);

        return redirect("/facture")->with('success' , 'facture a bien été ajouter avec succes'); */
    }


    public function deletaDataFacture($id){
        DB::table('factures')->where('id',intval($id))->delete();
        return redirect("/facture");
    }

    public function deletaDataToutFacture(){
        DB::table('factures')->delete();
        return redirect("/facture/facture");
    }

    public function afficheDataTouFacturet(){
        $f = DB::table('factures')->paginate(10);
        return view("facture/facture",['factures'=>$f]);
    }

    public function searchDataFacture(Request $request){
        $f = DB::table('factures')
        ->where('code_facture', $request->code_facture)
        ->paginate(1);

        return view("facture/facture",['factures'=>$f]);
    }

    public function filter(Request $request){
        $start_date=$request->start_date;
        $end_date=$request->end_date;

        $factures=Facture::whereDate('created_at','>=',$start_date)
                    ->whereDate('created_at','<=',$end_date)
                    ->paginate(100);


        return view('facture/facture',compact('factures'));
    }

    public function updateDataFacture(Facture $f){
        return view('facture.updateFacture',compact('f'));
    }

    public function updateFacture(Request $request,Facture $f){
        $validatedData = $request->validate([
            'prix_hors_taxes' => 'required',
            'tva' => 'required',
            'status' => 'required'
            /* 'temps' => 'required' */
        ]);
        $f->update($validatedData);
        /* $id=$request->input('id');
        $type_client=$request->input('type_client');
        $name=$request->input('name');
        $email=$request->input('email');
        $telephone=$request->input('telephone');
        DB::table('clients')->where('id',intval($id))
        ->update([
            'id'=>$id,
            'type_client'=>$type_client,
            'name'=>$name,
            'email'=>$email,
            'telephone'=>$telephone
        ]); */
        return redirect('/facture')->with('success','client a bien été modifié avec succes');
    }

    /* public function pdf(Facture $f){
        return view('pdf',compact('f'));
    } */
    public function pdf($f){
        $fa = Facture::find($f);
        $ls = Line::where('facture_id', $f)->get();
        return view('pdf', ['f'=>$fa,'ls'=>$ls]);
        }

    public function export(Request $request){
        $f = DB::table('factures');

        if ($request->has('code_facture')) 
        {
            $f->where('code_facture', $request->code_facture);

        };

        if ($request->has('client_id')) 
        {
            $f->where('client_id', $request->client_id);

        };

        if ($request->has('start_date') && $request->has('end_date')) {
            $start_date = $request->start_date;
            $end_date = $request->end_date;

            $f->whereDate('created_at', '>=', $start_date)
                  ->whereDate('created_at', '<=', $end_date);
        }

        $f->orderBy('id', 'asc');

        $export = new FacturesExport();
        $export->setQuery($f);

        return Excel::download($export, 'factures.xlsx');}

    
    public function searchDataClient(Request $request){
            $f = DB::table('factures')
            ->where('client_id', $request->client_id)
            ->paginate(1);
    
            return view("facture/facture",['factures'=>$f]);
        }
}