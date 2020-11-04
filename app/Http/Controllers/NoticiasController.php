<?php

namespace App\Http\Controllers;

use App\Models\Noticias;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index()
    {
        return view('dashboard')->with('noticias', Noticias::all());
    }

    public function store(Request $request)
    {
        if (!$request->name || !$request->description) {
            return response()->json(["error" => "Verifique os dados da consulta e tente novamente"], 400);
        }

        $not = Noticias::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        return response()->json($not);
    }

    public function list()
    {
        $noticias = Noticias::all();

        if ($noticias->count() > 0) {
            return response()->json($noticias);
        }

        return response()->json(["error" => "Não há notícias cadastradas"], 404);
    }
}
