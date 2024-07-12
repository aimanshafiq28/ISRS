<?php

namespace App\Controllers;

use App\Models\AttendanceModel;
use App\Models\StudentModel;

class AttendanceController extends BaseController
{
    public function handle()
    {
        $ic_number = $this->request->getPost('ic_number');
        $action = $this->request->getPost('action');

        if ($ic_number && ($action == 'masuk' || $action == 'keluar')) {
            $studentModel = new StudentModel();

            // Check if $ic_number exists in student table
            $student = $studentModel->where('ic_number', $ic_number)->first();
            if (!$student) {
                return redirect()->back()->with('error', 'Invalid IC Number.'); // Or handle error
            }

            $attendanceModel = new AttendanceModel();

            if ($action == 'masuk') {
                $att_id = $attendanceModel->clockIn($ic_number);
                if (!$att_id) {
                    return redirect()->back()->with('error', 'Failed to clock in.'); // Or handle error
                }
                // Set success message with att_id
                $message = '<div class="alert alert-success" style="color: white;"><i class="fas fa-check-circle"></i> Attendance recorded successfully.</div>';
                session()->setFlashdata('message', $message);
                return redirect()->to(base_url('clock'));
            } elseif ($action == 'keluar') {
                $result = $attendanceModel->clockOut($ic_number);
                if (!$result) {
                    return redirect()->back()->with('error', 'Failed to clock out.'); // Or handle error
                }
                // Set success message for clock out
                session()->setFlashdata('message', '<i class="fas fa-check-circle"></i> Attendance recorded successfully.');
            }
            return redirect()->back();
        } else {
            // Handle error or redirect back to the form with an error message
            return redirect()->back()->with('error', 'Invalid IC Number or action.');
        }
    }

    public function attendance()
    {
        $ic_number = session()->get('ic_number');

        $attendanceModel = new AttendanceModel();
        $attendanceData = $attendanceModel->getAttendanceData($ic_number);
        $data['attendanceData'] = $attendanceData;

        echo view('attendance', $data);
    }
}
