<?php

namespace App\Http\Controllers\Influencer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('influencer.home.index');
    }
}
