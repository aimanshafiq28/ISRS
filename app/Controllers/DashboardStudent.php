<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class DashboardStudent extends BaseController
{
    public function index(): string
    {
        return view('dashboard');
    }
}
