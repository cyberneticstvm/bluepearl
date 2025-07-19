<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "Blue Pearl General Trading";
        $description = "";
        $keywords = "";
        return view('index', compact('title', 'description', 'keywords'));
    }

    function about()
    {
        $title = "Blue Pearl General Trading";
        $description = "";
        $keywords = "";
        return view('about', compact('title', 'description', 'keywords'));
    }

    function contact()
    {
        $title = "Blue Pearl General Trading";
        $description = "";
        $keywords = "";
        return view('contact', compact('title', 'description', 'keywords'));
    }

    function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required|numeric',
            'message' => 'required',
        ]);
    }

    function products()
    {
        $title = "Blue Pearl General Trading";
        $description = "";
        $keywords = "";
        return view('products', compact('title', 'description', 'keywords'));
    }

    function services()
    {
        $title = "Blue Pearl General Trading";
        $description = "";
        $keywords = "";
        return view('services', compact('title', 'description', 'keywords'));
    }

    function blogs()
    {
        $title = "Blue Pearl General Trading";
        $description = "";
        $keywords = "";
        return view('blogs', compact('title', 'description', 'keywords'));
    }
}
