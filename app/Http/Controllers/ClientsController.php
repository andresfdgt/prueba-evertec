<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        return view('client');
    }

    public function getData()
    {
        // $cliente = Clients::where('id', $id)->first();
        // $envio = Envios::where("cliente_id", $id)->where("favorito", 1)->first();
        // $cliente->envio  = (empty($envio)) ? [] : $envio;
        // return response()->json($cliente);
    }
}
