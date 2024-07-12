<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\Controller;

class StudentAuthController extends Controller
{
    public function login()
    {
        helper(['form']);
        echo view('login');
    }

    

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function loginAuth()
    {
        $session = session(); // Assuming session helper is loaded

        // Retrieve input data
        $ic_number = $this->request->getPost('ic_number');
        $password = $this->request->getPost('stu_password');

        // Load the StudentModel
        $model = new StudentModel();

        // Verify credentials
        if ($model->verifyPassword($ic_number, $password)) {
            // Successful login
            $student = $model->getStudentByIC($ic_number);

            // Set session data
            $sessionData = [
                'ic_number' => $student['ic_number'],
                'stu_name' => $student['stu_name'],
                'stu_email' => $student['stu_email'],
                'stu_password' => $student['stu_password'],
                'stu_matrik' =>$student['stu_matrik'],
                'stu_dob' => $student['stu_dob'],
                'stu_address' => $student['stu_address'],
                'stu_fon_no' => $student['stu_fon_no'],
                'stu_home_no' => $student['stu_home_no'],
                'stu_pic' => $student['stu_pic'],
                'start_li' => $student['start_li'],
                'end_li' =>$student['end_li'],
                'stu_course' => $student['stu_course'],
                'ipt_name' => $student['ipt_name'],
                'ipt_add' => $student['ipt_add'],
                'ipt_no' => $student['ipt_no'],
                'sv_ipt' => $student['sv_ipt'],
                'sv_fon_no' => $student['sv_fon_no'],
                'sv_ppkt' =>$student['sv_ppkt'],
                'emergency_contact_name' => $student['emergency_contact_name'],
                'emergency_contact_no' => $student['emergency_contact_no'],
                'relay_contact' => $student['relay_contact'],
                
            ];

            $session->set($sessionData);

            // Redirect to dashboard or another page
            return redirect()->to(base_url('dashboard'));
        } else {
            // Failed login
            // Redirect back to login page with error message
            return redirect()->to(base_url('LoginStudent'))->with('error', 'Invalid IC number or password.');
        }
    }
}