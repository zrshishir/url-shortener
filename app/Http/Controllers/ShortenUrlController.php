<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortenUrl;
use Illuminate\Support\Str;

class ShortenUrlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortenUrls = ShortenUrl::latest()->get();

        return view('shortenUrl', compact('shortenUrls'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'required|url'
        ]);

        $input['link'] = $request->link;
        $input['code'] = Str::random(6);

        ShortenUrl::create($input);

        return redirect('generate-shorten-url')
            ->with('success', 'Shorten Link Generated Successfully!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenUrl($code)
    {
        $find = ShortenUrl::where('code', $code)->first();

        return redirect($find->link);
    }
}
