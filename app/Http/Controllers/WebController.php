<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    protected $bcc, $to;

    public function __construct()
    {
        $this->bcc = 'bluepearlgeneraltrading2025@gmail.com';
        $this->to = 'info@bluepearlgeneraltrading.com';
    }

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
            $data = ['message' => $request->message, 'name' => $request->name, 'email' => $request->email, 'number' => $request->contact_number];
            Mail::to($this->to)->bcc($this->bcc)->send(new ContactForm($data));
        } catch (Exception $e) {
            return redirect()->route('message')->with("error", $e->getMessage());
        }
        return redirect()->route('message')->with("success", "Thank you for contacting us! Our team will get back to you shortly!");
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
