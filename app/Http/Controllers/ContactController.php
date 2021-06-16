<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\SendMessage;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact.contact');
    }

    function sendMessage(ContactRequest $request){
        Mail::to("75ecc7fe2d-4f6a7b@inbox.mailtrap.io")->send(new SendMessage($request));

        session()->flash('status', 'success');
        session()->flash('message',"Message envoyé !");

        return redirect('contact');
    }
}
