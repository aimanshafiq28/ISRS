<?php

namespace App\Validation;

class PasswordRules
{
    public function passwordStrength(string $str, string &$error = null): bool
    {
        if (!preg_match('/[A-Z]/', $str)) {
            $error = 'The password must contain at least one uppercase letter.';
            return false;
        }

        if (!preg_match('/[0-9]/', $str)) {
            $error = 'The password must contain at least one number.';
            return false;
        }

        if (!preg_match('/[\W_]/', $str)) {
            $error = 'The password must contain at least one special character.';
            return false;
        }

        return true;
    }
}
