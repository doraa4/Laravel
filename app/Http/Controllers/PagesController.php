<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Dobrodošli na našu stranicu!';
        return view('pages.index') ->with('title', $title);
    }

    public function about(){
        $title = 'O nama';
        return view('pages.about') ->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Usluge',
            'services' => ['Evropa', 'Afrika', 'Azija']
        );
        return view('pages.services') ->with($data);
    }

    public function createProject()
    {
        return view('projects.create');
    }
}
