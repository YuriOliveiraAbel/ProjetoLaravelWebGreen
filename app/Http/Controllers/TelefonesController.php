<?php

namespace App\Http\Controllers;

use App\Telefone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TelefonesController extends Controller
{
    public function store(Telefone $telefone){
        try{
            $telefone->save();
        }catch (\Exception $e){
            return "ERRO".$e->getMessage();
        }
    }
}
