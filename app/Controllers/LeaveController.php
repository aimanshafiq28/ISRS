<?php

namespace App\Controllers;

use App\Models\LeaveModel;
use CodeIgniter\Controller;

class LeaveController extends Controller
{
    public function index()
    {
        return view('cutipelajar');
    }

    public function submit()
    {
        $leaveModel = new LeaveModel();

        $data = [
            'ic_number' => session()->get('ic_number'), // assuming ic_number is stored in session
            'start_date' => $this->request->getPost('start_date'),
            'end_date' => $this->request->getPost('end_date'),
            'apply_date' => date('Y-m-d'), // current date
            'reason' => $this->request->getPost('reason'),
            'special_reason' => $this->request->getPost('special_eason')
        ];

        if ($leaveModel->insert($data)) {
            return redirect()->to('/leave/success');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to submit leave request');
        }
    }

    public function success()
    {
        return view('cutipelajar');
    }
}
