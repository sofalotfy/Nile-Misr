<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsPage;
use App\Services\Pages\ContactUs;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact',[
            "pageData"  => ContactUs::execute(),
        ]);
    }

    public function store(Request $request)
    {
        //
    }
}