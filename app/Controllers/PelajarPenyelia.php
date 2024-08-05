<?php

namespace App\Controllers;
use App\Models\DepartmentModel;

class PelajarPenyelia extends BaseController
{
    public function index(): strings
    {
        return view('pelajarpenyelia');
    }

    public function tambah()
    {
        $departmentModel = new DepartmentModel();
        $data['departments'] = $departmentModel->findAll();
        return view('tambahpenyelia', $data);
    }


}
