<?php

namespace App\Models;

use CodeIgniter\Model;

class LeaveModel extends Model
{
    protected $table = 'studentleave';
    protected $primaryKey = 'leave_id';
    protected $allowedFields = ['ic_number', 'start_date', 'end_date', 'apply_date','leave_add', 'reason', 'special_reason'];
}
