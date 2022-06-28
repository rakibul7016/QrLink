<?php

namespace App\Http\Controllers;

use App\Models\URLsort;
use Illuminate\Http\Request;

class UrlsortController extends Controller
{
    public function make(Request $request)
    {
        if ($request->orginal_url) {
            $new_url = URLsort::create([
                'url' => $request->orginal_url,
                'code' => $request->orginal_url
            ]);

            if ($new_url) {
                $short_url = base_convert(rand(1000,99999), 10, 36);
                $new_url->update([
                'code' => $short_url
            ]);
                return redirect()->back()->with('success_message', '' .url($short_url));
            }
        }
        return back();
    }
    public function show($code){
        dd($code);
    }
}
