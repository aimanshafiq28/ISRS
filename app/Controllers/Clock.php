<?php

namespace App\Controllers;

class Clock extends BaseController
{
    public function index(): string
    {
        return view('clock');
    }
}
