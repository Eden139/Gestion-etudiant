<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index(): string
    {
        return view('form');
    }
}
