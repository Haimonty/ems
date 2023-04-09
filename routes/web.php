<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login',[HomeController::class,'login'])->name('login');
Route::post('/do-login',[HomeController::class,'doLogin'])->name('do.login');

//for employee
Route::group(['middleware'=>'auth'],function(){
    Route::get('/home',[HomeController::class,'home'])->name('home'); 
    Route::get('/home/logout',[HomeController::class,'logout'])->name('logout');

Route::get('/employee',[UserController::class, 'employee'])->name('employee.list'); 
Route:: get('/employee/create',[UserController::class,'employeeCreate']);
Route::post('/employee/store',[UserController::class,'store'])->name('employee.store');
Route::get('/employee/view{id}',[UserController::class,'view'])->name('employee.view');
Route::get('/employee/delete{id}',[UserController::class,'delete'])->name('employee.delete');

//for designation
Route::get('/designation',[DesignationController::class,'designation'])->name('designation.list');
Route::get ('/designation/create',[DesignationController::class,'designationCreate']);
Route::post('/designation/store',[DesignationController::class,'store'])->name('designation.store');

//for department
Route::get('/department',[DepartmentController::class,'department'])->name('department.list');
Route::get('/department/create',[DepartmentController::class,'departmentCreate'])->name('department.Create');
Route::post('/department/store',[DepartmentController::class,'store'])->name('department.store');
//for attendence

Route::get('/attendence',[AttendenceController::class,'attendence'])->name('attendence.list');

Route::post('/attendence/store',[AttendenceController::class,'store'])->name('attendence.store');

Route::get('/attendence/checkin',[AttendenceController::class,'checkin'])->name('attendence.checkin');
Route::get('/attendence/checkout',[AttendenceController::class,'checkout'])->name('attendence.checkout');
//for salary structure
Route::get('/salaryStructure',[SalaryStructureController::class,'salaryStructure'])->name('salaryStructure.list');
Route::get('/salary/structure',[SalaryStructureController::class,'create'])->name('salaryStructure.create');
Route::post('/salaryStructure/store',[SalaryStructureController::class,'store'])->name('salaryStructure.store');
//for payroll
Route::get('/payroll',[PayrollController::class,'payroll'])->name('payroll.list');

//for leaveBalance

Route::get('/leaveBalance',[LeaveBalanceController::class,'leaveBalance'])->name('leaveBalance.list');
Route::get('/leaveBalance/create',[LeaveBalanceController::class,'create'])->name('leavebalance.create');

//for leavetype
Route::get('/leaveType',[LeaveTypeController::class,'leaveType'])->name('leaveType.list');
Route::get('/leaveType/create',[LeaveTypeController::class,'create'])->name('leavetype.create');
Route::post('/leaveType/store',[LeaveTypeController::class,'store'])->name('leavetype.store');




//for leave
Route::get('/leave',[LeaveController::class,'leave'])->name('leave.list');

});

