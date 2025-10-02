<?php

namespace App\Http\Controllers\Core;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function showMain(){
         return view('core.forum.dashboard_forum');
    }
}
