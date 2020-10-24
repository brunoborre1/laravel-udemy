<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store()
    {
        request()->validate([
            'name'=> 'required',
            'email' => 'required',
            'subject' => 'required',
            'content' => 'required',
        ], [        
            'name.required' => __('I need your name')
        ]);

        //Enviar mail    

        Mail::to('brunoborrello@gmail.com')->send(new MessageReceived);

        return 'Datos validados / mensaje enviado';
    }

}
