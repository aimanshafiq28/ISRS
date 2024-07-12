<?php

namespace App\Controllers;

class LoginAdmin extends BaseController
{
    public function index(): string
    {
        return view('loginadmin');
    }
}
