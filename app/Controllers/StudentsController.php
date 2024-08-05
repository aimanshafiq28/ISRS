<?php

// StudentsController.php
// app/Controllers/StudentController.php
namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;
use App\Models\AdviserModel;

class StudentsController extends BaseController
{
    public function profile($ic_number)
    {
        log_message('debug', 'Profile method called with IC number: ' . $ic_number);
    
        $studentModel = new StudentModel();
        $student = $studentModel->where('ic_number', $ic_number)->first();
    
        if (!$student) {
            log_message('error', 'Student not found with IC number: ' . $ic_number);
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Student not found');
        }
    
        log_message('debug', 'Student found: ' . json_encode($student));
    
        $adviserModel = new AdviserModel();
        $data['advisers'] = $adviserModel->findAll();
        $data['student'] = $student; // Include student data in $data array
     
        return view('studentprofile', $data);
    }
    

    public function update($ic_number)
{
    $model = new StudentModel();
    $data = $this->request->getPost();

    $model->update($ic_number, $data);

    return redirect()->to(base_url('dashboardadmin'));
}

public function listStudents()
{
    $studentModel = new StudentModel();
    $students = $studentModel->where('stu_status', 'aktif')->findAll();

    return view('dashboardadmin', ['students' => $students]);
}



}

