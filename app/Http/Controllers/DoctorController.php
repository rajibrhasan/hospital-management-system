<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Report;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('doctor.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }

    public function viewpres(Request $request){
        $id = (int)$request->get('patient_id');
        $type = $request->get('type');
        $pres = DB::table('prescriptions')->where('patient_id',$id)->get();

        $reports = DB::table('reports')->where('patient_id',$id)->get();


        foreach($pres as $p){

            $doc_id = $p->doctor_id;
            $doc = DB::table('doctors')->where('id',$doc_id)->pluck('name')->first();
            $sp = DB::table('doctors')->where('id',$doc_id)->pluck('speciality')->first();

            $p->docname = $doc;
            $p->speciality = $sp;
        }

        if($type=='prescription'){
             return view('doctor.viewpres',['prescriptions'=>$pres]);
        }

        else if($type=='report'){
             return view('doctor.viewreport',['reports'=>$reports]);
        }
       
    }

    public function viewreport(Request $request){
        $id = $request->get('patient_id');
        $reports = DB::table('reports')->where('patient_id',$id)->get();
        return view('patient.reportview',['reports'=>$reports]);   
    }

     public function reportshow( $id)
    {
     
        $report = Report::find($id);

        return view('doctor.reportdetails',['report'=>$report]);
        
    
    }

     public function presshow($id)
    {
        $pres = Prescription::find($id);

        return view('doctor.presdetails',['pres'=>$pres]);
        
    }
    
}
