<?php

namespace App\Controllers;

class AboutMe extends BaseController
{
    public function index()
    {
        echo view('about_me');
    }
}
