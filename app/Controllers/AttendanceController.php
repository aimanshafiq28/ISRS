<?php

namespace App\Controllers;

use App\Models\AttendanceModel;
use App\Models\StudentModel;

class AttendanceController extends BaseController
{
    protected $studentModel;
    protected $attendanceModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
        $this->attendanceModel = new AttendanceModel();
    }

    public function handle()
    {
        $ic_number = $this->request->getPost('ic_number');
        $action = $this->request->getPost('action');

        if (!$ic_number || !in_array($action, ['masuk', 'keluar'])) {
            return redirect()->to(base_url('clock'))->with('error', 'Invalid IC Number or action.');
        }

        // Check if $ic_number exists in student table
        $student = $this->studentModel->where('ic_number', $ic_number)->first();
        if (!$student) {
            return redirect()->to(base_url('clock'))->with('error', 'Invalid IC Number.');
        }

        if ($action === 'masuk') {
            $att_id = $this->attendanceModel->clockIn($ic_number);
            if (!$att_id) {
                return redirect()->to(base_url('clock'))->with('error', 'Failed to clock in.');
            }
            $message = '<div class="alert alert-success" style="color: white;"><i class="fas fa-check-circle"></i> Attendance recorded successfully. (Clock-In ID: ' . $att_id . ')</div>';
            session()->setFlashdata('message', $message);
            return redirect()->to(base_url('clock'));
        } elseif ($action === 'keluar') {
            $result = $this->attendanceModel->clockOut($ic_number);
            if (!$result) {
                return redirect()->to(base_url('clock'))->with('error', 'Failed to clock out.');
            }
            $message = '<div class="alert alert-success" style="color: white;"><i class="fas fa-check-circle"></i> Attendance recorded successfully.</div>';
            session()->setFlashdata('message', $message);
            return redirect()->to(base_url('clock'));
        }
    }

    public function attendance()
    {
        $ic_number = session()->get('ic_number');

        $attendanceModel = new AttendanceModel();
        $attendanceData = $attendanceModel->getAttendanceData($ic_numbern,$stu_name);
        $data['attendanceData'] = $attendanceData;

        echo view('attendance', $data);
    }
}
