<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home',[
            'featuredPost' => \App\Models\Post::published()->Featured()->latest('published_at')->take(3)->get(),
            'latestPost' => \App\Models\Post::published()->latest('published_at')->take(9)->get()
        ]);
    }
}
