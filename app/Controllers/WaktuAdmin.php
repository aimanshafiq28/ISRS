<?php

namespace App\Controllers;

use App\Models\AttendanceModel;
use Dompdf\Dompdf;



class WaktuAdmin extends BaseController
{
    public function index()
    {
        $attendanceModel = new AttendanceModel();
        $data['attendanceDataAdmin'] = $attendanceModel->findAllGroupedByICNumber();

        return view('adminwaktu', $data);
    }

    public function getAttendanceData()
    {
        $attendanceModel = new AttendanceModel();
        return $attendanceModel->findAllGroupedByICNumber();
    }

    public function printAttendanceData()
    {
        $attendanceModel = new AttendanceModel();
        $ic_number = session()->get('selected_ic_number');
        return $attendanceModel->where('ic_number', $ic_number)->findAll();
    }

    public function setICNumberSession($ic_number)
    {
        session()->set('selected_ic_number', $ic_number);
        return redirect()->to(base_url('attendancepdf'));
    }


    public function generatePdf()
    {
        $attendanceDataAdmin = $this->printAttendanceData();
        $ic_number = session()->get('selected_ic_number');
        $html = view('attendance_pdf', ['attendanceDataAdmin' => $attendanceDataAdmin, 'ic_number' => $ic_number]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("attendance_$ic_number.pdf", ["Attachment" => 1]);
    }
    public function search()
    {
        // Load necessary helpers (if not already loaded in autoload)
        helper(['url', 'form']);

        // Get search input from query string
        $search = $this->request->getGet('search');

        // Load your model
        $attendanceModel = new \App\Models\AttendanceModel(); // Adjust with your actual model path and name

        // Call a method in your model to fetch filtered data
        $attendanceDataAdmin = $attendanceModel->searchICNumber($search);

        // Prepare data to pass to the view
        $data['attendanceDataAdmin'] = $attendanceDataAdmin;

        // Load the view with the filtered data
        return view('adminwaktu', $data);
    }
    

}
