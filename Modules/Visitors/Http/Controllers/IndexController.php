<?php

namespace Modules\Visitors\Http\Controllers;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('visitors::index');
    }
}
