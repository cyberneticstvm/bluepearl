<?php

namespace App\Http\Controllers;

use Exception;
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
        try {
        } catch (Exception $e) {
            return redirect()->back('message')->with("error", $e->getMessage());
        }
        return redirect()->back('message')->with("success", "Thank you for contacting us! Our team will get back to you shortly!");
    }

    function message()
    {
        $title = "Blue Pearl General Trading";
        $description = "";
        $keywords = "";
        return view('message', compact('title', 'description', 'keywords'));
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
