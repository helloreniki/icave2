<?php

namespace App\Http\Controllers\Statamic;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function submit(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required|max:500'
        ]);

        Mail::to('hello@test.com')
            ->bcc($data['email'])
            ->send(new ContactForm($data));

        return back()->with('success', 'Sporocilo je bilo poslano!');

    }
}
