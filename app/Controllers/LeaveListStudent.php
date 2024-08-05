<?php

namespace App\Controllers;
use App\Models\LeaveModel;

class LeaveListStudent extends BaseController
{
    public function index(): string
    {
        $model = new LeaveModel();
        $data['studentleaves'] = $model->findAll();

        return view('leaveliststudent', $data);
    }
}
