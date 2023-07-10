<?php

namespace App\Http\Controllers\Guest;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Foundation\Application;

class GuestController extends Controller
{
    public function index() {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'phpVersion' => PHP_VERSION,
        ]);
    }
}
