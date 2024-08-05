<?php

namespace App\Models;

use CodeIgniter\Model;

class AttendanceModel extends Model
{
    protected $table = 'attendance';
    protected $primaryKey = 'id';
    protected $allowedFields = ['ic_number', 'date', 'clock_in', 'clock_out']; // Adjust fields as per your database schema

    public function clockIn($ic_number)
    {
        // Check if the ic_number exists in the student table
        $studentModel = new \App\Models\StudentModel(); // Replace with your actual StudentModel class
        $student = $studentModel->where('ic_number', $ic_number)->first();

        if (!$student) {
            // Return an error message or throw an exception if ic_number does not exist in student table
            return ['error' => 'IC number does not exist in the student records.'];
        }

        // Proceed to clock in
        $data = [
            'ic_number' => $ic_number,
            'date' => date('Y-m-d'),
            'clock_in' => date('Y-m-d H:i:s')
        ];

        $this->insert($data);
        return $this->db->affectedRows() == 1 ? $this->db->insertID() : false;
    }

    public function clockOut($ic_number)
    {
        // Check if the ic_number exists in the student table
        $studentModel = new \App\Models\StudentModel(); // Replace with your actual StudentModel class
        $student = $studentModel->where('ic_number', $ic_number)->first();

        if (!$student) {
            // Return an error message or throw an exception if ic_number does not exist in student table
            return ['error' => 'IC number does not exist in the student records.'];
        }

        $date = date('Y-m-d');
        // Check if there is an existing clock-in record for the same date and ic_number
        $existingRecord = $this->where('ic_number', $ic_number)
                               ->where('date', $date)
                               ->where('clock_out', null) // Check if clock_out is null (not already clocked out)
                               ->first();

        if ($existingRecord) {
            // Update the existing record with clock_out time
            $this->set('clock_out', date('Y-m-d H:i:s'))
                 ->where('ic_number', $existingRecord['ic_number'])
                 ->update();
            return true;
        } else {
            // If no existing record, insert a new record for clock_out
            $data = [
                'ic_number' => $ic_number,
                'date' => $date,
                'clock_out' => date('Y-m-d H:i:s')
            ];

            $this->insert($data);
            return $this->db->affectedRows() == 1;
        }
    }

    public function getAttendanceData($ic_number)
{
    $this->db->select('a.date, a.clock_in, a.clock_out');
    $this->db->from('attendance a');
    $this->db->join('student s', 'a.ic_number = s.ic_number', 'inner');
    $this->db->where('a.ic_number = ', $ic_number);
    $query = $this->db->get();
    echo $this->db->last_query(); // print the SQL query
    die(); // stop execution here
    return $query->result_array();
} 

public function getAttendanceDataAdmin($ic_number)
{
    $this->db->select('a.ic_number, s.stu_name, MIN(a.clock_in) as clock_in, MAX(a.clock_out) as clock_out');
    $this->db->from('attendance a');
    $this->db->join('student s', 'a.ic_number = s.ic_number', 'inner');
    $this->db->where('a.ic_number', $ic_number);
    $this->db->group_by('a.ic_number, s.stu_name'); 
    $query = $this->db->get();
    
    // Debugging: print the SQL query and result
    echo '<pre>'; 
    echo 'SQL Query: ' . $this->db->last_query() . "\n";
    print_r($query->result_array()); 
    echo '</pre>';
    
    return $query->result_array();
}




public function findAllGroupedByICNumber()
    {
        // Join with the student table to get stu_name
        $this->select('attendance.ic_number, student.stu_name, MIN(attendance.clock_in) as clock_in, MAX(attendance.clock_out) as clock_out')
             ->join('student', 'student.ic_number = attendance.ic_number')
             ->groupBy('attendance.ic_number, student.stu_name');
        return $this->findAll();
    }

    public function PrintAllGroupedByICNumber()
    {
        $builder = $this->db->table('attendance');
        $builder->select('student.stu_name as stu_name, attendance.ic_number, attendance.date, attendance.clock_in, attendance.clock_out');
        $builder->join('student', 'student.ic_number = attendance.ic_number');
        $builder->orderBy('attendance.ic_number');
    
        $data = $builder->get()->getResultArray();
        echo '<pre>'; print_r($data); echo '</pre>'; // Check the structure of the data
        return $data;
    }
    




    public function searchICNumber($search)
{
    $builder = $this->db->table('attendance');
    $builder->select('attendance.ic_number, MIN(attendance.clock_in) as clock_in, MAX(attendance.clock_out) as clock_out, student.stu_name');
    $builder->join('student', 'student.ic_number = attendance.ic_number');
    $builder->like('attendance.ic_number', $search);
    $builder->groupBy('attendance.ic_number');

    $query = $builder->get();
    $results = $query->getResultArray();

    return $results;
}


public function getAttendanceByICNumber($ic_number)
    {
        return $this->where('ic_number', $ic_number)->findAll();
    }

    

    
}
