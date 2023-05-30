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

        $postCategories = $post->categories()->get();

        if($postCategories){

            echo "<h1>Categorias</h1><br>";

            foreach($postCategories as $category){

                echo "Nome do usuario: #{$category->id} {$category->name}<br>";

            }
        }

        //  $post->categories()->attach([3]);
        //  $post->categories()->detach([3]);
        //  $post->categories()->sync([5, 10]);
        //  $post->categories()->syncWithoutDetaching([5, 6, 7]);

        // $post->comments()->create([
        //     'content' => 'Comentario 123'
        // ]);

        $comments = $post->comments()->get();

        if($comments){

            echo "<h1>Categorias</h1><br>";

            foreach($comments as $comment){

                echo "Nome do usuario: #{$comment->id} {$comment->content}<br>";

            }
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
