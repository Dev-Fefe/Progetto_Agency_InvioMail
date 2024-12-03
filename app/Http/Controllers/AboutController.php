<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AboutController extends Controller
{
    public function aboutindex(){
        $aboutus = [
            ['name' =>'Giorgia Rossi', 'description' => 'Lorem, ipsum dolor', 'job' => 'CEO', 'img' =>'https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjF8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'],
            ['name' => 'Luca Bianchi', 'description' =>  'Lorem, ipsum dolor', 'job' =>  'CTO', 'img' => 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjh8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'],
            ['name' => 'Sophia Neri', 'description' =>  'Lorem, ipsum dolor', 'job' =>  'Student', 'img' => 'https://images.unsplash.com/photo-1542206395-9feb3edaa68d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mjl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60'],
        ];

        return view('about-us', ['aboutus' => $aboutus]);
    }

    public function invioContatto(Request $request){
        $name = $request->input('nome');
        $email = $request->input('email');
        $message = $request->input('messaggio');


        try{
            Mail::to($email)->send(new ContactMail($name, $email, $message));
            return redirect(route('homepage'))->with('emailSent', 'Ti ricontatteremo il prima possibile');
        
        }catch(Exception $error){
            return redirect()->back()->with('emailError', 'fallito');
        }
    }
}
