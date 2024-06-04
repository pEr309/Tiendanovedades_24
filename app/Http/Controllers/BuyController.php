<?php

namespace App\Http\Controllers;

use App\Http\Resources\BuyCollection;
use App\Http\Responses\ApiResponse;
use App\Models\Buy;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $buys = new BuyCollection(Buy::all());
            return ApiResponse::success('Listado de usuarios',200,$buys);

        }catch(Exception $e){
            return ApiResponse::error('Error en la consulta',404);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try{
            $buy = new BuyCollection(Buy::query()->where('id',$id)->get());
            if($buy->isEmpty()) throw new ModelNotFoundException('Compra no encontrado');
            return ApiResponse::success("Información de la compra",200,$buy);
        }catch (ModelNotFoundException $e){
            return ApiResponse::error('No se encuentra la compra');

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buy $buy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buy $buy)
    {
        //
    }
}
