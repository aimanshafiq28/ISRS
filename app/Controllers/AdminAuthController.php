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
        $session = session();

        // Retrieve input data
        $ad_username = $this->request->getPost('ad_username');
        $ad_password = $this->request->getPost('ad_password');

        // Debugging: Log input data
        log_message('debug', 'Attempting login with Username: ' . $ad_username);

        // Load the AdminModel
        $model = new AdminModel();

        // Verify credentials
        $admin = $model->getAdminByUsername($ad_username);

        if ($admin) {
            // Debugging: Log retrieved admin data
            log_message('debug', 'Admin found: ' . json_encode($admin));

            if ($model->verifyPassword($ad_username, $ad_password)) {
                // Successful login
                // Set session data
                $sessionData = [
                    'admin_id' => $admin['admin_id'],
                    'ad_username' => $admin['ad_username'],
                    'is_logged_in' => true
                ];

                $session->set($sessionData);

                // Redirect to dashboard or another page
                log_message('debug', 'Login successful for Username: ' . $ad_username);
                return redirect()->to(base_url('dashboardadmin'));
            } else {
                // Debugging: Password mismatch
                log_message('debug', 'Password mismatch for Username: ' . $ad_username);
            }
        } else {
            // Debugging: Admin not found
            log_message('debug', 'No admin found with Username: ' . $ad_username);
        }

        // Failed login
        // Redirect back to login page with error message
        $session->setFlashdata('error', 'Invalid username or password.');
        return redirect()->to(base_url('loginadmin'));
    }
}
