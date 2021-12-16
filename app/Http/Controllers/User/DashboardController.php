<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Checkout;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('Course')->whereUserId(Auth::id())->get();
        return view ('user.dashboard', [
            'checkouts' => $checkouts
        ]);
    }
}
