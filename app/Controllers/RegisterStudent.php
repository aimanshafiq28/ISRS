<?php

namespace App\Controllers;
use App\Models\StudentModel;

class RegisterStudent extends BaseController
{
    public function index(): string
    {
        return view('registerstudent');
    }

    public function create()
    {
        $request = \Config\Services::request();
        $ic_number = $request->getPost('ic_number');
        $stu_name = $request->getPost('stu_name');
        $stu_email = $request->getPost('stu_email');
        $stu_password = $request->getPost('stu_password');
        $stu_matrik = $request->getPost('stu_matrik');
        $stu_dob = $request->getPost('stu_dob');
        $stu_address = $request->getPost('stu_address');
        $stu_fon_no = $request->getPost('stu_fon_no');
        $stu_home_no = $request->getPost('stu_home_no');
        $stu_pic = $request->getPost('stu_pic');
        $start_li = $request->getPost('start_li');
        $end_li = $request->getPost('end_li');
        $stu_course = $request->getPost('stu_course');
        $ipt_name = $request->getPost('ipt_name');
        $ipt_add = $request->getPost('ipt_add');
        $ipt_no = $request->getPost('ipt_no');
        $sv_ipt = $request->getPost('sv_ipt');
        $sv_fon_no = $request->getPost('sv_fon_no');
        $sv_ppkt = $request->getPost('sv_ppkt');
        $emergency_contact_name = $request->getPost('emergency_contact_name');
        $emergency_contact_no = $request->getPost('emergency_contact_no');
        $relay_contact = $request->getPost('relay_contact');

        // Validate form data
        $validation = \Config\Services::validation();
        $validation->setRules([
           
        ]);

        if (!$validation->run( $_POST)) {
            // Validation failed, show errors
            $errors = $validation->getErrors();
            // ... display errors to the user ...
        } else {
            // Validation succeeded, insert data into student table
            $studentModel = new StudentModel();
            $data = [
                'ic_number' => $ic_number,
                'stu_name' => $stu_name,
                'stu_email' => $stu_email,   
                'stu_password' => password_hash($stu_password, PASSWORD_DEFAULT),
                'stu_matrik' => $stu_matrik,
                'stu_dob' => $stu_dob,
                'stu_address' => $stu_address,
                'stu_fon_no' => $stu_fon_no,
                'stu_home_no' => $stu_home_no,
                'stu_pic' => $stu_pic,
                'start_li' => $start_li,
                'end_li' => $end_li,
                'stu_course' => $stu_course,
                'ipt_name' => $ipt_name,
                'ipt_add' => $ipt_add,
                'ipt_no' => $ipt_no,
                'sv_ipt' => $sv_ipt,
                'sv_fon_no' => $sv_fon_no,
                'sv_ppkt' => $sv_ppkt,
                'emergency_contact_name' => $emergency_contact_name,
                'emergency_contact_no' => $emergency_contact_no,
                'relay_contact' => $relay_contact,
            ];

            var_dump($data);
    
            // Handle file upload
            $file = $this->request->getFile('stu_pic');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(WRITEPATH . '../public/uploads', $newName);
            $data['stu_pic'] = $newName;
        } else {
            $data['stu_pic'] = 'default_profile.jpg'; // or any default image if upload fails
        }
            $studentModel->insert($data);
        return redirect()->to(base_url('LoginStudent'));
            // ... redirect to a success page or display a success message ...
        }
    }
}