<?php

// StudentsController.php
namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class StudentsController extends Controller
{
    public function index()
    {
        $studentModel = new StudentModel();
        $students = $studentModel->get_all_students();
    
        if (empty($students)) {
            echo "No students found!";
        } else {
            // Debugging: Print the $students array to see its contents
            var_dump($students);

            // Assuming you have a view 'students/index.php' to display the data
            return view('students/index', ['students' => $students]);
        }
    }
}
