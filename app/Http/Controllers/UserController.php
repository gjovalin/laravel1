<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libri;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{

    function save(Request $req)
    {

        $libri = new Libri;
        $libri->autori = $req->autori;
        $libri->titulli_librit = $req->titulli_librit;
        $libri->viti_botimit = $req->viti_botimit;
        $libri->sasia = $req->sasia;
        $libri->cmimi = $req->cmimi;
        $libri->vendodhja = $req->vendodhja;
        $libri->save();
        return Redirect::to('/');

    }
}


