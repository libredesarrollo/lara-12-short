<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Http;

class ChatGTPController extends Controller
{

    public function textarea()
    {
        return view('chatgtp.textarea');
    }

    public function ask(): string
    {

        $response = Http::withToken(env('OPENAI_API_KEY'))
            ->post('https://api.openai.com/v1/chat/completions', [
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => request('ask')],
                ],
                'temperature' => 0.7,
            ]);
            dd($response->json());
        return $response->json()['choices'][0]['message']['content'] ?? 'No hubo respuesta.';
    }
}
