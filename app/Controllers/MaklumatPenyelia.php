<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdviserModel;

class MaklumatPenyelia extends BaseController
{
    public function index()
    {
        $adviserModel = new AdviserModel();
    $data['advisers'] = $adviserModel->getAllAdvisers();

    // Check if $data['students'] is empty
    if (empty($data['advisers'])) {
        error_log('No advisers found!');
    } else {
        error_log('Advisers found: '. print_r($data['advisers'], true));
    }

    // Load the view and pass $data to it
    return view('maklumatpenyelia', $data);
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
