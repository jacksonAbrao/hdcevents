<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // $nome = "Matheus";
        // $idade = 29;

        // $arr = [10, 20, 30, 40, 50];

        // $nomes = ["Matheus", "João", "Maria", "Pedro"];

        // return view(
        //     "welcome",
        //     [
        //         "nome" => $nome,
        //         "idade" => $idade,
        //         "arr" => $arr,
        //         "nomes" => $nomes
        //     ]
        // );
    }
    public function create()
    {
        return view("events.create");
    }
}
