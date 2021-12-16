<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with(['Course', 'User'])->get();
        return view('admin.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}