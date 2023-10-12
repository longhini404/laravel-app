<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class RickAndMortyController extends Controller
{
    public function index()
    {
        $client = new Client();

        $options = [
            'headers' => [
                'Accept' => 'application/json',
            ]
        ];

        try {
            $response = $client->get('https://rickandmortyapi.com/api/character', $options);
            $data = json_decode($response->getBody(), true);

            return view('rick-and-morty', ['characters' => $data['results']]);
        } catch (\Exception $e) {
            return view('rick-and-morty', ['message' => 'Erro ao buscar dados da API de Rick and Morty']);
        }
    }
}
