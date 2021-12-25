<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Prescription;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('patient.home');
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
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }

    public function searchdoc(){
        $speciality = DB::table('doctors')->pluck('speciality')->toArray();
        $speciality = array_unique($speciality);
        return view('patient.searchdoc',['speciality'=>$speciality]);
    }

    public function viewpres($id){
        $pres = DB::table('prescriptions')->where('patient_id',$id)->get();


        foreach($pres as $p){

            $doc_id = $p->doctor_id;
            $doc = DB::table('doctors')->where('id',$doc_id)->pluck('name')->first();
            $sp = DB::table('doctors')->where('id',$doc_id)->pluck('speciality')->first();

            $p->docname = $doc;
            $p->speciality = $sp;
        }

        return view('viewpres',['prescriptions'=>$pres]);
    }

    public function viewreport($id){
        $reports = DB::table('reports')->where('patient_id',$id)->get();
        return view('patient.reportview',['reports'=>$reports]);   
    }
}
