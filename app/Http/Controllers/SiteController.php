<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = 'Bernardo';
        $habits = ['Ler', 'Atividade Física', 'Estudar', 'Viajar'];

        return view('home', [
            'name' => $name,
            'habits' => $habits
        ]);
    }
}
