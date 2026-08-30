<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUsPage;
use App\Services\Pages\ContactUs;
use App\Models\FeedBack;


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
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
            'type' => ['nullable', 'in:حج,عمرة'],
            'message' => ['nullable', 'string'],
        ]);

        FeedBack::create($validated);

        return back()->with('success', 'تم إرسال رسالتك بنجاح.');
    }
}