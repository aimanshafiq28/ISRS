<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'admin_id';
    protected $allowedFields = ['ad_username', 'ad_password'];

    public function getAdminByUsername($ad_username)
    {
        return $this->where('ad_username', $ad_username)->first();
    }

    public function verifyPassword($ad_username, $ad_password)
    {
        $admin = $this->getAdminByUsername($ad_username);

        if (!$admin) {
            return false;
        }

        return $ad_password === $admin['ad_password'];
    }
}
