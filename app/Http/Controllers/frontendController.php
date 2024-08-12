<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class frontendController extends Controller
{
    //
    public function index() {
        return Inertia::render('Frontend/Home') ; 
        // return Inertia::render('Welcome', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        //     'laravelVersion' => Application::VERSION,
        //     'phpVersion' => PHP_VERSION,
        // ]);
    }

    public function about() {
        return Inertia::render('Frontend/About', [
            'title' => 'About Us',
            'description' => 'This is a simple about page.'
        ]) ; 
    }
}