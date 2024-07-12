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
    $this->db->select('a.ic_number, MIN(a.clock_in) as clock_in, MAX(a.clock_out) as clock_out');
    $this->db->from('attendance a');
    $this->db->join('student s', 'a.ic_number = s.ic_number', 'inner');
    $this->db->where('a.ic_number = ', $ic_number);
    $this->db->group_by('a.ic_number');
    $query = $this->db->get();
    echo $this->db->last_query(); // print the SQL query
    die(); // stop execution here
    return $query->result_array();
}

public function findAllGroupedByICNumber()
    {
        $this->select('ic_number, MIN(clock_in) as clock_in, MAX(clock_out) as clock_out');
        $this->groupBy('ic_number');
        return $this->findAll();
    }

    public function PrintAllGroupedByICNumber()
    {
        return $this->select('ic_number, date, clock_in, clock_out')
                    ->orderBy('ic_number')
                    ->findAll();
    }

    
}
