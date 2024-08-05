<?php

namespace App\Models;

use CodeIgniter\Model;

class AdviserModel extends Model
{
    protected $table = 'adviser';
    protected $primaryKey = 'staff_id';
    protected $allowedFields = ['staff_name', 'dept_id', 'staff_id', 'staff_email'];

    public function getAllAdvisers()
    {
        return $this->findAll(); // Return all rows as associative array
    }
}
