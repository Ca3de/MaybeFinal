<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrayerRequest;

class PrayerRequestController extends Controller
{
    public function showForm()
    {
        return view('prayer-request')->with('pageTitle', 'Prayer Request');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email',
            'request' => 'required|string'
        ]);

        PrayerRequest::create($request->all());

        // Optionally, send an email notification to pastors or staff
        // Mail::to('staff@church.org')->send(new PrayerRequestReceived($request->all()));

        return redirect()->back()->with('success', 'Your prayer request has been submitted.');
    }
}

