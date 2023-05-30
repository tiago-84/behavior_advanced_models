<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;



class UserController extends Controller
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
        $user = User::find($id);

        echo "<h1>Dados do usuario</h1><br>";
        echo "Nome do usuario: {$user->name}<br>";
        echo "E-mail: {$user->email}<br>";

        $userAddress = $user->addressDelivery()->get()->first();
        if($userAddress){
            echo "<h1>Endereço de Entrega</h1><br>";
            echo "Endereço: {$userAddress->address}, {$userAddress->number}<br>";
            echo "Complemento: {$userAddress->complement} CEP: {$userAddress->zipcode}<br>";
            echo "Cidade/Estado: {$userAddress->city}/{$userAddress->state}<br>";
        }

        $addressTest = new Address([
            'address'=> 'Rua dos bobos 111',
            'number'=> '0',
            'complement'=> 'Apto 123',
            'zipcode'=> '88000-000',
            'city'=> 'Floripa',
            'state'=> 'SC'
        ]);

        $address = new Address();
        $address->address = 'Rua dos Bobos 222';
        $address->number = '123';
        $address->complement = 'casa 2';
        $address->zipcode = '99000-000';
        $address->city = 'Barra da Tijuca';
        $address->state = 'RJ';

        //$user->addressDelivery()->save($address);

        //$user->addressDelivery()->saveMany([$addressTest, $address]);

        // $user->addressDelivery()->create([
        //     'address'=> 'Rua dos bobos 111',
        //     'number'=> '0',
        //     'complement'=> 'Apto 123',
        //     'zipcode'=> '88000-000',
        //     'city'=> 'Floripa',
        //     'state'=> 'SC'
        // ]);


        // $user->addressDelivery()->createMany([[
        //     'address'=> 'Rua dos bobos 333',
        //     'number'=> '0',
        //     'complement'=> 'Apto 123',
        //     'zipcode'=> '88000-000',
        //     'city'=> 'Floripa',
        //     'state'=> 'SC'
        // ], [
        //     'address'=> 'Rua dos bobos 444',
        //     'number'=> '0',
        //     'complement'=> 'Apto 123',
        //     'zipcode'=> '88000-000',
        //     'city'=> 'Floripa',
        //     'state'=> 'SC'
        // ]]);

        // $users = User::with('addressDelivery')->get();
        // dd($users);


        $posts = $user->posts()->orderBy('id', 'DESC')->take(2)->get();
        if($posts){

            echo "<h1>Artigos</h1><br>";

            foreach($posts as $post)
            {
            echo "#{$post->id}Titulo: {$post->title}<br>";
            echo "Subtítulo: {$post->subtitle}<br>";
            echo "Conteudo: {$post->description}<br><hr>";
            }

        }

        // $comments = $user->commentsOnMyPost()->get();

        // if($comments){
        //     echo "<h1>Comentários dos meus Artigos</h1>";

        //     foreach($comments as $comment){
        //         echo "Post: #{$comment->post} User: #{$comment->user} {$comment->content}<br>";
        //     }
        // }

        $user->comments()->create([
            'content' => 'Teste de comentario no modelode usuario'
        ]);

        $comments = $user->comments()->get();

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
