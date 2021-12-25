<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apts = Appointment::all();

        return view('doctor.createpres',['apts'=>$apts]);
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'appointment_id' => 'required',
            'symptoms' => 'required',
            'advice' => 'required',
        ]);

        $pres = new Prescription;

        $pres->appointment_id = (int) $request->input('appointment_id');
        $pres->patient_id = DB::table('appointments')->where('id',$pres->appointment_id)->pluck('patient_id')->first();
        $pres->doctor_id = DB::table('appointments')->where('id',$pres->appointment_id)->pluck('doctor_id')->first();

        $pres->symptoms = $request->get('symptoms');
        $pres->treatment = $request->get('advice');
        $pres->created_at = date('Y-m-d H:i:s');

        $pres->save();

         return redirect()->route('pres.create')
                        ->with('success','Prescription created successfully.');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pres = Prescription::find($id);

        return view('patient.presdetails',['pres'=>$pres]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prescription  $prescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prescription $prescription)
    {
        //
    }
}
