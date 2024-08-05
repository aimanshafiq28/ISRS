<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentProfile extends BaseController
{
    public function index()
{
    $model = new StudentModel();
    $data['student'] = $model->where('stu_status', 'aktif')->findAll();

    return view('dashboardadmin', $data); // Adjust the view name as necessary
}
}
