<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Mail\EmailExample;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
          $email = 'petalsjuvs@gmail.com';
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];
    
        Mail::to($email)
            ->send(new EmailExample($data));
    
        return redirect()->back()->with('success', 'Email has been sent');
    }
    
}
