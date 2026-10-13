<?php

namespace App\Http\Controllers;

use App\Models\Mymodel;
use Illuminate\Http\Request;

class MyController extends Controller
{

    public function my_view()
    {

        $datas = Mymodel::All();
        // dd($datas);
        return view('welcome', compact('datas'));
    }


    public function adddata()
    {
        return view('adddata');
    }
    public function adddataPosted(Request $req)
    {
        $Datas = new Mymodel;
        $Datas->name = $req->name;
        $Datas->email = $req->email;
        $Datas->save();
        return redirect('/');
    }
    public function delete($id){
        $datas=Mymodel::find($id);
        $datas->delete();
        return redirect('/');
    }
}
