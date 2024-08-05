<?php

namespace Config;

use CodeIgniter\Config\BaseService;
use CodeIgniter\Validation\ValidationInterface;

class Services extends BaseService
{
    public static function validation(?ValidationInterface $config = null, bool $getShared = true): ValidationInterface
    {
        if ($getShared) {
            return static::getSharedInstance('validation', $config);
        }

        $config = $config ?? config('Validation');
        $validation = new \CodeIgniter\Validation\Validation($config);

        // Register custom rules
        $validation->setRule('passwordStrength', '\App\Validators\PasswordValidator::passwordStrength');

        return $validation;
    }
}
