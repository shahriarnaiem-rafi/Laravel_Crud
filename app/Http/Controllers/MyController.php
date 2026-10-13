<?php

namespace App\Http\Controllers;

use App\Models\Mymodel2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MyController extends Controller
{
    public function view()
    {
        $Datas = Mymodel2::all();
        return view('welcome', compact("Datas"));
    }
    public function add()
    {
        return view('add');
    }
    public function adddata(Request $req)
    {
        $Datas = new Mymodel2;
        $Datas->name = $req->name;
        $Datas->email = $req->email;
        $Datas->save();
        return Redirect::to('/');
    }
    public function deletedata($id)
    {
        $Datas = Mymodel2::find($id);
        $Datas->delete();

        return Redirect::to('/');
    }
    public function edit($id)
    {
        $Datas = Mymodel2::find($id);

        return view('/edit',compact('Datas'));
    }

    public function edited(Request $req)
    {
        $Datas = Mymodel2::findOrFail($req->id);
        $Datas->name = $req->name;
        $Datas->email = $req->email;
        $Datas->save();
        return Redirect::to('/');
    }
}
