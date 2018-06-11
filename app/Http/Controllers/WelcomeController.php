<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\issue;

class WelcomeController extends Controller
{
    //首页
    public function index()
    {
        $issues = issue::orderBy('created_at', 'desc')->take(2)->get();
        return view('welcome.index')->with('issues', $issues);
    }

    //about
    public function about()
    {
        return view('welcome.about');
    }
}
