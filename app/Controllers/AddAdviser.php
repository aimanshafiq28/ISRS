<?php
namespace App\Controllers;

use App\Models\DepartmentModel;

class AddAdviser extends BaseController
{
    
    public function index()
    {
        $departmentModels = new DepartmentModel();
        $departments = $departmentModel->findAll();
       return view('tambahpenyelia', $data);
    }
    
}