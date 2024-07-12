<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    protected $allowedFields = [
        'admin_id', 
        'ad_username', 
        'ad_password'
        
    ];

    public function getStudentByIC($ad_username)
    {
        return $this->where('ad_username', $ad_username)->first();
    }
   
    /**
     * Verifies student's password.
     *
     * @param string $ic_number
     * @param string $stu_password
     * @return bool
     */
    public function verifyPassword($ad_username, $ad_password)
    {
        $admins = $this->getStudentByIC($ad_username);

        if (!$admins) {
            return false;
        }

        return password_verify($ad_password, $admins['ad_password']);
    }

   
}
