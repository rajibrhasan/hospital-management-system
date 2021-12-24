<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controller\AppointmentController;
use App\Http\Controller\PatientController;
use App\Models\Doctor;
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

Route::get('/adm/adduser',function(){
    return view('admin.createuser');
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

Route::post('/doc/editprofile',function(Request $request)
{
        $id = (int)$request->get('doc_id');
        $doc = Doctor::find($id);
        $doc->speciality = $request->get('sp');
        $doc->college = $request->get('hos');
        $doc->position = $request->get('post');
        $doc->save();

        return response()->json(['success'=>'Profile updated successfully.']);   
});

Route::resource('apt',AppointmentController::class);
Route::resource('pres',PrescriptionController::class);
Route::resource('doc',DoctorController::class);
Route::resource('pat',PatientController::class);
Route::resource('adm',AdminController::class);
Route::post('/adm/createuser',[AdminController::class,'adduser']);

Route::get('/home',[HomeController::class,'redirect']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/add_doctor_view',[AdminController::class,'addview']);
