<?php

namespace App\Controllers;

use App\Models\AdviserModel;
use App\Models\DepartmentModel;
use CodeIgniter\Controller;

class AdviserController extends Controller
{
    public function index()
{
    $departmentModel = new DepartmentModel();
    $departments = $departmentModel->findAll();
    var_dump($departments); // Check if $departments is not empty
    return view('my_view', ['departments' => $departments]);
}

    public function store()
    {
        $adviserModel = new AdviserModel();

        $data = [
            'staff_name'    => $this->request->getPost('staff_name'),
            'staff_email'   => $this->request->getPost('staff_email'),
            'dept_id' => $this->request->getPost('dept_id'),
        ];

        $adviserModel->insert($data);

        return redirect()->to(base_url('maklumatpenyelia')); // Redirect to a success page or wherever needed
    }
}

