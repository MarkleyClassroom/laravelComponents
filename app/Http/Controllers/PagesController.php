<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{
    public function index()
    {
        return view("pages.index")->with('title', "Laravel Rocks");
    }
    public function about()
    {
        return view("pages.about");
    }
    public function services()
    {
        $data = array(
            'title' => "Services",
            'services' => ['Web Design', 'Programming', 'Frameworks']
        );
        return view("pages.services")->with($data);
    }
}
