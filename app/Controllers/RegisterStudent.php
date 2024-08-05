<?php

namespace App\Controllers;

use App\Models\StudentModel;
use App\Models\AdviserModel;

class RegisterStudent extends BaseController
{
    public function index(): string
    {
        // Load the adviser model
        $adviserModel = new AdviserModel();

        // Fetch all advisers from the database
        $data['advisers'] = $adviserModel->findAll();

        // Load the view
        return view('registerstudent', $data);
    }

    public function create()
    {
        // Fetch request data
        $request = \Config\Services::request();
        $data = [
            'ic_number' => $request->getPost('ic_number'),
            'stu_name' => $request->getPost('stu_name'),
            'stu_email' => $request->getPost('stu_email'),
            'stu_password' => $request->getPost('stu_password'),
            'stu_matrik' => $request->getPost('stu_matrik'),
            'stu_dob' => $request->getPost('stu_dob'),
            'stu_address' => $request->getPost('stu_address'),
            'stu_fon_no' => $request->getPost('stu_fon_no'),
            'stu_home_no' => $request->getPost('stu_home_no'),
            // 'stu_pic' => $request->getPost('stu_pic'),
            'start_li' => $request->getPost('start_li'),
            'end_li' => $request->getPost('end_li'),
            'stu_course' => $request->getPost('stu_course'),
            'ipt_name' => $request->getPost('ipt_name'),
            'ipt_add' => $request->getPost('ipt_add'),
            'ipt_no' => $request->getPost('ipt_no'),
            'sv_ipt' => $request->getPost('sv_ipt'),
            'sv_fon_no' => $request->getPost('sv_fon_no'),
            'sv_ppkt' => $request->getPost('sv_ppkt'),
            'emergency_contact_name' => $request->getPost('emergency_contact_name'),
            'emergency_contact_no' => $request->getPost('emergency_contact_no'),
            'relay_contact' => $request->getPost('relay_contact'),
        ];

        // Validate form data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'ic_number' => 'required|numeric',
            'stu_password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]|passwordStrength',
                'errors' => [
                    'passwordStrength' => 'The password must contain at least one uppercase letter, one number, and one special character.',
                ],
            ],
        ]);
        
        if ($validation->withRequest($this->request)->run() === false) {
            // Validation failed, fetch advisers and return view with errors
            $adviserModel = new AdviserModel();
            $data['advisers'] = $adviserModel->findAll();
            $data['validation'] = $validation;

            return view('registerstudent', $data);
        } else {
            // Validation succeeded, process data
            $studentModel = new StudentModel();
            $data['stu_password'] = password_hash($data['stu_password'], PASSWORD_DEFAULT);

            try {
                $studentModel->insert($data);
                return redirect()->to(base_url('LoginStudent'));
            } catch (\Exception $e) {
                echo "Error inserting data: " . $e->getMessage();
            }

            // For debugging purposes
            var_dump($data);
        }
    }
}
