<?php

namespace App\Http\Controllers\Admin;

use App\Application;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LeaveApprovalController extends Controller
{
    public function update(Request $request, Application $application)
    {
        $application->status = $request->input('status');
        $application->save();

        return back()
            ->withSuccess("ছুটির আবেদনপত্রে আপনার মতামত প্রদান করা হয়েছে |");
    }
}
