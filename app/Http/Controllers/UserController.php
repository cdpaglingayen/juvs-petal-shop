<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use App\Mail\EmailExample;
use SheetDB\SheetDB;
use Carbon\Carbon;



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
        $date = Carbon::now('GMT-7')->format('Y-m-d');
    
        $data = [
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message'),
            'date' => $date,
        ];

      
        $sheetdb = new SheetDB('wotxvq4mniu04');
      
        $success = $sheetdb->create($data);
    
        if ($success) {
            Mail::to($email)->send(new EmailExample($data));
            return redirect()->back()->with('success', 'Email has been sent sucessfully');
        } else {
            // Handle errors here if the data could not be saved to SheetDB.
            return redirect()->back()->with('error', 'Failed to send email');
        }
    }
    
    
}
    
    
    

