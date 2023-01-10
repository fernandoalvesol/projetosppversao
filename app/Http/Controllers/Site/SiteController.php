<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){

        $title = 'Site';

        return view('Site.site.index', compact('title'));

    }
}
