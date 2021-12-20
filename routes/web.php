<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/search',function(){
    $speciality = DB::table('doctors')->pluck('speciality')->toArray();
    $speciality = array_unique($speciality);
    return view('patients.bookappt',['speciality'=>$speciality]);
});

Route::post('/doclist',function(Request $request){
    $category = $request->input('sel');

    $res = DB::table('doctors')->where('speciality',$category)->get();

    return view('patients.book_action',['res'=>$res]);
});
Route::resource('doc',doctorsController::class);

Route::get('/home',[HomeController::class,'redirect']);

#Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('apt',AppointmentController::class);
Route::resource('pres',PrescriptionController::class);
Route::get('/add_doctor_view',[AdminController::class,'addview']);
