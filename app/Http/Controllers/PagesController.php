<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'welcome to laravel';
        return view('pages.index')->with('title1',$title);
    }

    public function about() {
        return view('pages.about');
    }

    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['web design', 'seo', 'sdfas']
        );
        return view('pages.services')->with($data);
    }
}
