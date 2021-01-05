<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('schedule.index');
    }

    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required|min:6|max:50|string',
          'email' => 'required|email',
          'number' => 'required|integer|',
          'summary' => 'required|string'
        ]);

        Mail::raw('It works!', function($message) {
            $message->to(request('email'))
            ->subject('hello mane!');
        });

        return redirect('/schedule')
        ->with('message', 'Your email has been sent. We will contact you very soon. Thank you!');
    }
}
