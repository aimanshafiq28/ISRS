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

//Waktu Clockin/ClockOut Admin
$routes->get('WaktuAdmin', 'WaktuAdmin::index');

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

// Login routes Admin
$routes->get('loginadmin', 'LoginAdmin::index');
$routes->post('admin-login', 'AdminAuthController::loginAuth');









