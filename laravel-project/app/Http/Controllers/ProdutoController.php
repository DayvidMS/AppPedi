<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function teste()
    {
        $response = ['msg' => 'teste'];
        return response()->json($response);
    }
}
