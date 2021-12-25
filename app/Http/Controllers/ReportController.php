<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\Patient;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $patients = Patient::all();
        return view('admin.createreport',['patients'=>$patients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg',
         'name'=>'required|string',
         'patient'=>'required',
 
        ]);
 
        $reportName = $request->get('name');

        $patientID = $request->get('patient');
        $imageName = time().'.'.$request->image->extension(); 
 
        $request->image->move(public_path('reports'),$imageName);
 
 
        $report = new Report;
 
        $report->name = $reportName;
        $report->path = $imageName;
        $report->patient_id = $patientID;
 
        $report->save();
 
        return redirect()->route('rep.create')->with('success', 'Report has been uploaded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
     
        $report = Report::find($id);

        return view('patient.reportdetails',['report'=>$report]);
        
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
    }
}
