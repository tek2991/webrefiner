<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function post(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'gdpr' => 'required|in:true',
        ]);
        
        $data = $request->only(['name', 'email', 'phone']);

        Contact::create($data);

        Mail::to($request->email)->send(new ContactEmail($data));
    }
}
