<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplyController extends Controller
{
    public function create(Request $request)
    {
        $authorizers = $request->user()->role->authorizers;

        return view('applications.create', compact('authorizers'));
    }

    public function store(Request $request)
    {
        $application = $request->user()->applications()->create($request->all());

        return redirect('profile/applications')
            ->withSuccess('আপনার ছুটির আবেদনপত্র সাবমিট করা হয়েছে |');
    }
}
