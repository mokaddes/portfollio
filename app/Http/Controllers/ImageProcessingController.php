<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageProcessingController extends Controller
{
    public function index()
    {
        return view('works.image_old');
    }

    public function store(Request $request)
    {
       dd($request->all());
    }
}
