<?php

namespace App\Controllers;

use App\Models\AdminModel;
use CodeIgniter\Controller;

class AdminAuthController extends Controller
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
        $ad_username = $this->request->getPost('ad_username');
        $ad_password = $this->request->getPost('ad_password');

        // Load the StudentModel
        $model = new AdminModel();

        // Verify credentials
        if ($model->verifyPassword($ad_username, $ad_password)) {
            // Successful login
            $admins = $model->getStudentByIC($ad_username);

            // Set session data
            $sessionData = [
                'admin_id' => $admins['admin_id'],
                'ad_username' => $admins['ad_username'],
                'ad_password' => $admins['ad_password']
            ];

            $session->set($sessionData);

            // Redirect to dashboard or another page
            return redirect()->to(base_url('dashboardadmin'));
        } else {
            // Failed login
            // Redirect back to login page with error message
            return redirect()->to(base_url('loginadmin'))->with('error', 'Invalid IC number or password.');
        }
    }
}