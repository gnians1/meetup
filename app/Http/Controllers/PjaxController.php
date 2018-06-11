<?php

namespace App\Http\Controllers;

use App\Model\Issue;
class PjaxController extends Controller
{
    public function index(){

        $res = Issue::find(4);
        dd($res);
    }
}
