<?php

namespace App\Controllers;
use App\Models\AttendanceModel;

class Waktu extends BaseController
{
    public function index()
    {
        $attendanceModel = new AttendanceModel();
        $data['attendanceData'] = $attendanceModel->findAll();

        return view('waktu', $data);
    }
}
