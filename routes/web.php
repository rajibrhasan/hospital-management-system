<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\doctorsController;
use App\Http\Controllers\AdminController;

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
Route::get('pat/searchdoc',function(){
    $speciality = DB::table('doctors')->pluck('speciality')->toArray();
    $speciality = array_unique($speciality);
    return view('patient.searchdoc',['speciality'=>$speciality]);
});


Route::post('/doclist',function(Request $request){
    $category = $request->input('sel');

    $res = DB::table('doctors')->where('speciality',$category)->get();

    return view('patient.bookdoc',['res'=>$res,'category'=>$category]);
});
Route::resource('apt',AppointmentController::class);
Route::resource('pres',PrescriptionController::class);
Route::resource('doc',DoctorController::class);
Route::resource('pat',PatientController::class);
Route::resource('adm',AdminController::class);

Route::get('/home',[HomeController::class,'redirect']);

#Route::get('/home',[HomeController::class,'redirect']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::get('/contact_us', function(){ 
    return view ('contact_us');
});

Route::get('/blood_bank', function(){ 
    return view ('blood_bank');
});
