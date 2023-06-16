<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * * @OA\Info(
 *     version="1.0",
 *     title="Example for response examples value"
 * )
 * @OA\Get(
 *     tags={"produtos"},
 *     summary="Returns a list of products",
 *     description="Returns a object of products",
 *     path="/teste",
 *     @OA\Response(response="200", description="A list with courses"),
 * ),
 * 
 */

class ProdutoController extends Controller
{

    public function teste()
    {
        $response = ['msg' => 'teste'];
        return response()->json($response);
    }
}
