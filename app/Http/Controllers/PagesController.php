<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Host of the iframe.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function parent()
    {
        return view('parent');
    }


    /**
     * The content of the iframe.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function child()
    {
        return view('child');
    }
}
