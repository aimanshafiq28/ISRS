<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\StudentModel;

class DashboardAdmin extends BaseController
{
    public function index()
{
    $studentModel = new StudentModel();
    $data['students'] = $studentModel->where('stu_status', 'aktif')
                                     ->orWhere('stu_status', null)
                                     ->findAll();

    // Check if $data['students'] is empty
    if (empty($data['students'])) {
        error_log('No active or status-null students found!');
    } else {
        error_log('Active or status-null students found: ' . print_r($data['students'], true));
    }

    // Load the view and pass $data to it
    return view('dashboardadmin', $data);
}



    public function search()
    {
        // Load necessary helpers (if not already loaded in autoload)
        helper(['url', 'form']);

        // Get search input from query string
        $search = $this->request->getGet('search');

        // Load your model
        $studentModel = new \App\Models\StudentModel(); // Adjust with your actual model path and name

        // Call a method in your model to fetch filtered data
        $studentDataAdmin = $studentModel->searchICNumber($search);

        // Prepare data to pass to the view
        $data['studentDataAdmin'] = $studentDataAdmin;

        // Load the view with the filtered data
        return view('dashboardadmin', $data);
    }

    
}
