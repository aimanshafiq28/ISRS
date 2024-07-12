<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'ic_number';
    protected $allowedFields = [
        'ic_number', 
        'stu_name', 
        'stu_email', 
        'stu_password', 
        'stu_matrik', 
        'stu_dob', 
        'stu_address', 
        'stu_fon_no', 
        'stu_home_no', 
        'stu_pic', 
        'start_li', 
        'end_li', 
        'stu_course', 
        'ipt_name', 
        'ipt_add', 
        'ipt_no', 
        'sv_ipt', 
        'sv_fon_no', 
        'sv_ppkt', 
        'emergency_contact_name', 
        'emergency_contact_no', 
        'relay_contact'
    ];

    /**
     * Fetches a student record based on IC number.
     *
     * @param string $ic_number
     * @return array|null
     */
    public function getStudentByIC($ic_number)
    {
        return $this->where('ic_number', $ic_number)->first();
    }

    /**
     * Verifies student's password.
     *
     * @param string $ic_number
     * @param string $stu_password
     * @return bool
     */
    public function verifyPassword($ic_number, $stu_password)
    {
        $student = $this->getStudentByIC($ic_number);

        if (!$student) {
            return false;
        }

        return password_verify($stu_password, $student['stu_password']);
    }

    /**
     * Fetches all student records.
     *
     * @return array
     */
    // StudentModel.php

    public function get_students()
{
    return $this->findAll();
}
}
