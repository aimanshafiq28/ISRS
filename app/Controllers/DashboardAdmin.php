<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class DashboardAdmin extends BaseController
{
    public function index()
    {
        $studentModel = new StudentModel();
    $data['students'] = $studentModel->get_students();

    // Check if $data['students'] is empty
    if (empty($data['students'])) {
        error_log('No students found!');
    } else {
        error_log('Students found: '. print_r($data['students'], true));
    }

    // Load the view and pass $data to it
    return view('dashboardadmin', $data);
    }

    
}
