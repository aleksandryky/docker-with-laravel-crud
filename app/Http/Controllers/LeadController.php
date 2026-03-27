<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'phone_number' => ['required', 'string', 'max:30'],
            'business_name' => ['required', 'string', 'max:255'],
            'business_status' => ['required', 'string', 'max:100'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        Lead::create($validated);

        return redirect('/')
            ->with('success', 'Thanks! Your request has been submitted. Our team will contact you soon.');
    }
}
