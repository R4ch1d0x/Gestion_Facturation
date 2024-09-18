<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*class UserMangementController extends Controller
{
    //index page
    public function index(){
        return view('usermanagement.usertable');
    }
}*/

use App\Models\Client;
use Illuminate\Support\Facades\DB;

class UserMangementController extends Controller
{

    public function getFromDataDB()
    { $c = DB::table('clients')->paginate(10);
        return view('usermanagement/usertable', ['clients' => $c]);
    }

    public function insert(Request $request){
        $request->validate([
            'id'=>'required',
            'code_client'=>'required',
            'type_client'=>'required',
            'name'=>'required',
            'email'=>'required',
            'telephone'=>'required'
        ]);
        Client::create(array_merge($request->all(), [
        'id'=>$request->id,
        'code_client'=>$request->code_client,
        'type_client'=>$request->type_client,
        'name'=>$request->name,
        'email'=>$request->email,
        'telephone'=>$request->telephone
        ]));
        return redirect("/client")->with('success' , 'client a bien été ajouter avec succes');
    }


    public function updateData(Client $c){
        return view('client.update',compact('c'));

    }
    public function update(Request $request,Client $c){
        $validatedData = $request->validate([
            'type_client' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'telephone' => 'required',
        ]);
        $c->update($validatedData);
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
        return redirect('/client')->with('success','client a bien été modifié avec succes');
    }

    public function deletaData($id){
        DB::table('clients')->where('id',intval($id))->delete();
        return redirect("/client");
    }

    public function afficheDataTout(){
        $c = DB::table('clients')->paginate(10);
        return view("usermanagement/usertable",['clients'=>$c]);
    }

    public function searchData(Request $request){
        $c = DB::table('clients')->where('code_client', $request->code_client)->paginate(1);
        return view("usermanagement/usertable",['clients'=>$c]);
    }
    public function deletaDataTout(){
        DB::table('clients')->delete();
        return redirect("usermanagement/usertable");
    }

    public function pdf(Client $c){
        return view('pdf',compact('c'));

    }
}
