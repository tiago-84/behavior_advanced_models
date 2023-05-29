<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
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
        $post = Post::find($id);

        echo "#{$post->id}Titulo: {$post->title}<br>";
        echo "Subtítulo: {$post->subtitle}<br>";
        echo "Conteudo: {$post->description}<br><hr>";

        $postAuthor = $post->author()->get()->first();

        if($postAuthor){

            echo "<h1>Dados do usuario</h1><br>";
            echo "Nome do usuario: {$postAuthor->name}<br>";
            echo "E-mail: {$postAuthor->email}<br>";
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
