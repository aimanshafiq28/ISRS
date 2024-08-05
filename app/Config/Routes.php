<?php

$routes->get('/', 'Home::index');

// Login routes
$routes->get('LoginStudent', 'LoginStudent::index');
$routes->post('student-login', 'StudentAuthController::loginAuth');

// Logout route
$routes->get('logout', 'StudentAuthController::logout');

// Dashboard route
$routes->get('dashboard', 'DashboardStudent::index');

// Register route
$routes->get('RegisterStudent', 'RegisterStudent::index');
$routes->post('student_create', 'RegisterStudent::create');

// Profile route
$routes->get('Profile', 'Profile::index');

// Schedule route
$routes->get('ScheduleStudent', 'ScheduleStudent::index');

// Clock routes
$routes->get('clock', 'Clock::index');
$routes->post('handle-clock', 'AttendanceController::handle');

// Test database route
$routes->get('test_db', 'Test::testdb');

//Dashboard
$routes->get('dashboardstu', 'DashboardStudent::index');

//Waktu Clockin/ClockOut
$routes->get('Waktu', 'Waktu::index');

//Admin Dashboard
$routes->get('dashboardadmin', 'DashboardAdmin::index');

//Alumni
$routes->get('alumni', 'Alumni::index');

//Waktu Clockin/ClockOut Admin
$routes->get('WaktuAdmin', 'WaktuAdmin::index');
$routes->get('search', 'WaktuAdmin::search');

$routes->get('student', 'StudentsController::index');

//pdf
$routes->get('attendancepdf', 'WaktuAdmin::generatePdf');
$routes->get('setICNumberSession/(:any)', 'WaktuAdmin::setICNumberSession/$1');


//admin jadual
$routes->get('jadualadmin', 'JadualAdmin::index');

//student laporan
$routes->get('Laporan', 'Laporan::index');

//cuti
$routes->get('cutipelajar', 'CutiStudent::index');


//asdmin log in
$routes->get('loginadmin', 'AdminAuthController::login');
$routes->post('admin-login', 'AdminAuthController::loginAuth');


// Login routes Admin
// $routes->get('studentprofile', 'StudentProfile::index');

//studentprofile

$routes->get('student/edit/(:num)', 'StudentsController::edit/$1');
$routes->post('student/update/(:num)', 'StudentsController::update/$1');
$routes->get('studentprofile/(:any)', 'StudentsController::profile/$1');

// routes.php

$routes->get('studentprofile', 'AdviserController::create');

//profile search
$routes->get('search', 'DashboardAdmin::search');

//maklumat penyelia
$routes->get('maklumatpenyelia', 'MaklumatPenyelia::index');

//pelajarpenyelia
$routes->get('pelajarpenyelia', 'PelajarPenyelia::index');
$routes->get('tambahpenyelia', 'PelajarPenyelia::tambah');
$routes->post('adviser_create', 'AdviserController::store');

//leave
$routes->get('leave', 'LeaveController::index');
$routes->post('leave/submit', 'LeaveController::submit');
$routes->get('leave/success', 'LeaveController::success');
$routes->get('leaveliststudent', 'LeaveListStudent::index');


//test
$routes->get('testregister', 'Test::testregister');










