<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        $address = Address::find($id);

        echo "<h1>Endereço de Entrega</h1><br>";
        echo "Endereço: {$address->address}, {$address->number}<br>";
        echo "Complemento: {$address->complement} CEP: {$address->zipcode}<br>";
        echo "Cidade/Estado: {$address->city}/{$address->state}<br>";

        $addressUser = $address->user()->get()->first();

        if($addressUser){
            echo "<h1>Dados do usuario</h1><br>";
            echo "Nome do usuario: {$addressUser->name}<br>";
            echo "E-mail: {$addressUser->email}<br>";
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
