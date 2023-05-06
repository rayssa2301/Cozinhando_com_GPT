<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use GuzzleHttp\Client;


class HomeController extends Controller
{
    public function index(Request $r): View
    {
        return view('welcome');
    }

    public function ingredientesAcao(Request $r): View
    {
        $client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            ],
        ]);


        $response = $client->post('completions', [
            'json' => [
                'model' => 'text-davinci-003',
                'prompt' => 'Gere uma receita incrível com os seguintes ingredientes: ' . $r->ingredientes,
                'temperature' => 0.5,
                'max_tokens' => 500
            ]
        ]);
        if ($response->getStatusCode() == 200) {
            $data = json_decode($response->getBody(), true);
        }
        dd($data);
    }
}
