<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function store()
    {
        request()->validate([
            'email' => 'required|email'
        ]);

        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us6'
        ]);

        try {

            $response = $mailchimp->lists->addListMember(config('services.mailchimp.lists.subscribers'),[
                'email_address' => request('email'),
                'status' => 'subscribed'
            ]);

        } catch (\Exception $e) {
           throw ValidationException::withMessages([
                'email' => "This email could not be added"
           ]);
        }


         return back()->with('success', 'Uspesno ste se narocili na novice!');

    }
}
