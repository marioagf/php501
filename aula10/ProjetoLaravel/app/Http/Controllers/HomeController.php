<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function vendas()
    {
        $produtos = [
            'Produto1' => 'Banana',
            'Produto2' => 'Abacate',
            'Produto3' => 'Laranja',
            'Titulo'   => 'ProduTOPS',
        ];
        return view('vendas')->with($produtos);
    }
}
