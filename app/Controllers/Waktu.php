<?php

namespace App\Controllers;
use App\Models\AttendanceModel;

class Waktu extends BaseController
{
    public function index()
    {
        $session = session();
        $ic_number = $session->get('ic_number');

        // Load model
        $attendanceModel = new AttendanceModel();
        $attendanceData = $attendanceModel->getAttendanceByICNumber($ic_number);

        // Pass data to view
        return view('waktu', ['attendanceData' => $attendanceData]);
    }
}
