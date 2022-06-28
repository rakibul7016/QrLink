<?php

namespace App\Http\Controllers;
use Orhanerday\OpenAi\OpenAi;
use Illuminate\Http\Request;

class AIController extends Controller
{
    public function result(Request $request){
        $topic = $request->topic;

        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));
        $prompt='This is a resulr'.$topic."\n";

        $aiOutput = $open_ai->complete([
            'engine' => 'davinci',
            'prompt' => $prompt,
            'temperature' => 0.9,
            'max_tokens' => 150,
            'frequency_penalty' => 0,
            'presence_penalty' => 0.6,
         ]);
         $output = json_decode($aiOutput,true);
         $outputText = $output["choices"]["0"]["text"];
        return view('qr-code',['result'=> $outputText]);
    }
}
