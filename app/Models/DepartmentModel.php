<?php

namespace App\Models;

use CodeIgniter\Model;

class DepartmentModel extends Model
{
    protected $table = 'department';
    protected $primaryKey = 'dept_id';
    protected $returnType = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['dept_id','dept_name'];
}
