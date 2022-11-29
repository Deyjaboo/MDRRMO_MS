<?php

namespace App\Http\Controllers;

use App\Models\Export;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use App\Exports\Report_Export;
use Maatwebsite\Excel\Facades\Excel;
class ExportController extends Controller
{

    function report_show(){
        $data = DB::table('reports')->get()->sortBy('created_at');;
        $year = DB::table('reports')->value('Year');

        return view('Export',['data'=>$data, 'year'=>$year]);
    }
    function search(Request $request){
        $month = $request->input('month');
        $year = $request->input('year');

        if($month != "" && $year == ""){
            $data = DB::table('reports')->where('Month', $month)->get()->sortBy('created_at');

            //Deleting Data inside database of Export
            $num1 = Export::query()->count();
            if($num1!=0){
                Export::truncate();
            }
            foreach($data as $data1){
                $new_data = new Export();
                    $new_data->DateOfIncident = $data1->DateOfIncident;
                    $new_data->Incident_Track_Num = $data1->Incident_Track_Num;
                    $new_data->NameOfVictim = $data1->NameOfVictim;
                    $new_data->Address = $data1->Address;
                    $new_data->Age = $data1->Age;
                    $new_data->Sex = $data1->Sex;
                    $new_data->Covid = $data1->Sex;
                    $new_data->Num_Person_Involve = $data1->Num_Person_Involve;
                    $new_data->NameOfDriver = $data1->NameOfDriver;
                    $new_data->Vehicle_Used = $data1->Vehicle_Used;
                    $new_data->Devices_Used = $data1->Devices_Used;
                    $new_data->ResponderTeam = $data1->ResponderTeam;
                    $new_data->NameOfResponders = $data1->NameOfResponders;
                    $new_data->Photos_By = $data1->Photos_By;
                    $new_data->Date_Recorded = $data1->Date_Recorded;
                    $new_data->TypeOfIncident = $data1->TypeOfIncident;
                    $new_data->Informat_Contact = $data1->Informat_Contact;
                    $new_data->IncidentLocation = $data1->IncidentLocation;
                    $new_data->TimeOccured = $data1->TimeOccured;
                    $new_data->TimeReported = $data1->TimeReported;
                    $new_data->TimeResponse = $data1->TimeResponse;
                    $new_data->TimeTerminated = $data1->TimeTerminated;
                    $new_data->Incident_Des = $data1->Incident_Des;
                    $new_data->ReportedBy = $data1->ReportedBy;
                    $new_data->Picture = $data1->Picture;
                    $new_data->Year = $data1->Year;
                    $new_data->Month = $data1->Month;
                    $new_data->UserId = $data1->UserId;
                    $new_data->Remark = $data1->Remark;
                    $new_data->Status = $data1->Status;
                $new_data->save();
            }
        }
        elseif($month == "" && $year != ""){
            $data = DB::table('reports')->where('Year', $year)->get()->sortBy('created_at');

            //Deleting Data inside database of Export
            $num1 = Export::query()->count();
            if($num1!=0){
                Export::truncate();
            }
            foreach($data as $data1){
                $new_data = new Export();
                    $new_data->DateOfIncident = $data1->DateOfIncident;
                    $new_data->Incident_Track_Num = $data1->Incident_Track_Num;
                    $new_data->NameOfVictim = $data1->NameOfVictim;
                    $new_data->Address = $data1->Address;
                    $new_data->Age = $data1->Age;
                    $new_data->Sex = $data1->Sex;
                    $new_data->Covid = $data1->Sex;
                    $new_data->Num_Person_Involve = $data1->Num_Person_Involve;
                    $new_data->NameOfDriver = $data1->NameOfDriver;
                    $new_data->Vehicle_Used = $data1->Vehicle_Used;
                    $new_data->Devices_Used = $data1->Devices_Used;
                    $new_data->ResponderTeam = $data1->ResponderTeam;
                    $new_data->NameOfResponders = $data1->NameOfResponders;
                    $new_data->Photos_By = $data1->Photos_By;
                    $new_data->Date_Recorded = $data1->Date_Recorded;
                    $new_data->TypeOfIncident = $data1->TypeOfIncident;
                    $new_data->Informat_Contact = $data1->Informat_Contact;
                    $new_data->IncidentLocation = $data1->IncidentLocation;
                    $new_data->TimeOccured = $data1->TimeOccured;
                    $new_data->TimeReported = $data1->TimeReported;
                    $new_data->TimeResponse = $data1->TimeResponse;
                    $new_data->TimeTerminated = $data1->TimeTerminated;
                    $new_data->Incident_Des = $data1->Incident_Des;
                    $new_data->ReportedBy = $data1->ReportedBy;
                    $new_data->Picture = $data1->Picture;
                    $new_data->Year = $data1->Year;
                    $new_data->Month = $data1->Month;
                    $new_data->UserId = $data1->UserId;
                    $new_data->Remark = $data1->Remark;
                    $new_data->Status = $data1->Status;
                $new_data->save();
            }
        }
        elseif($month != "" && $year != ""){
            $data = DB::table('reports')->where('Month', $month)->where('Year', $year)->get()->sortBy('created_at');

            //Deleting Data inside database of Export
            $num1 = Export::query()->count();
            if($num1!=0){
                Export::truncate();
            }
            foreach($data as $data1){
                $new_data = new Export();
                    $new_data->DateOfIncident = $data1->DateOfIncident;
                    $new_data->Incident_Track_Num = $data1->Incident_Track_Num;
                    $new_data->NameOfVictim = $data1->NameOfVictim;
                    $new_data->Address = $data1->Address;
                    $new_data->Age = $data1->Age;
                    $new_data->Sex = $data1->Sex;
                    $new_data->Covid = $data1->Sex;
                    $new_data->Num_Person_Involve = $data1->Num_Person_Involve;
                    $new_data->NameOfDriver = $data1->NameOfDriver;
                    $new_data->Vehicle_Used = $data1->Vehicle_Used;
                    $new_data->Devices_Used = $data1->Devices_Used;
                    $new_data->ResponderTeam = $data1->ResponderTeam;
                    $new_data->NameOfResponders = $data1->NameOfResponders;
                    $new_data->Photos_By = $data1->Photos_By;
                    $new_data->Date_Recorded = $data1->Date_Recorded;
                    $new_data->TypeOfIncident = $data1->TypeOfIncident;
                    $new_data->Informat_Contact = $data1->Informat_Contact;
                    $new_data->IncidentLocation = $data1->IncidentLocation;
                    $new_data->TimeOccured = $data1->TimeOccured;
                    $new_data->TimeReported = $data1->TimeReported;
                    $new_data->TimeResponse = $data1->TimeResponse;
                    $new_data->TimeTerminated = $data1->TimeTerminated;
                    $new_data->Incident_Des = $data1->Incident_Des;
                    $new_data->ReportedBy = $data1->ReportedBy;
                    $new_data->Picture = $data1->Picture;
                    $new_data->Year = $data1->Year;
                    $new_data->Month = $data1->Month;
                    $new_data->UserId = $data1->UserId;
                    $new_data->Remark = $data1->Remark;
                    $new_data->Status = $data1->Status;
                $new_data->save();
            }
        }
        else{
            $data = DB::table('reports')->get()->sortBy('created_at');

            //Deleting Data inside database of Export
            $num1 = Export::query()->count();
            if($num1!=0){
                Export::truncate();
            }
            foreach($data as $data1){
                $new_data = new Export();
                    $new_data->DateOfIncident = $data1->DateOfIncident;
                    $new_data->Incident_Track_Num = $data1->Incident_Track_Num;
                    $new_data->NameOfVictim = $data1->NameOfVictim;
                    $new_data->Address = $data1->Address;
                    $new_data->Age = $data1->Age;
                    $new_data->Sex = $data1->Sex;
                    $new_data->Covid = $data1->Sex;
                    $new_data->Num_Person_Involve = $data1->Num_Person_Involve;
                    $new_data->NameOfDriver = $data1->NameOfDriver;
                    $new_data->Vehicle_Used = $data1->Vehicle_Used;
                    $new_data->Devices_Used = $data1->Devices_Used;
                    $new_data->ResponderTeam = $data1->ResponderTeam;
                    $new_data->NameOfResponders = $data1->NameOfResponders;
                    $new_data->Photos_By = $data1->Photos_By;
                    $new_data->Date_Recorded = $data1->Date_Recorded;
                    $new_data->TypeOfIncident = $data1->TypeOfIncident;
                    $new_data->Informat_Contact = $data1->Informat_Contact;
                    $new_data->IncidentLocation = $data1->IncidentLocation;
                    $new_data->TimeOccured = $data1->TimeOccured;
                    $new_data->TimeReported = $data1->TimeReported;
                    $new_data->TimeResponse = $data1->TimeResponse;
                    $new_data->TimeTerminated = $data1->TimeTerminated;
                    $new_data->Incident_Des = $data1->Incident_Des;
                    $new_data->ReportedBy = $data1->ReportedBy;
                    $new_data->Picture = $data1->Picture;
                    $new_data->Year = $data1->Year;
                    $new_data->Month = $data1->Month;
                    $new_data->UserId = $data1->UserId;
                    $new_data->Remark = $data1->Remark;
                    $new_data->Status = $data1->Status;
                $new_data->save();
            }
        }
        return view('Export',['data'=>$data]);
    }
    public function refresh(){
        $data = DB::table('reports')->get()->sortBy('created_at');

            $num1 = Export::query()->count();
            if($num1!=0){
                Export::truncate();
            }
            
        return view('Export',['data'=>$data]);
    }
    public function export()
    { 
        $createdAt = Carbon::parse(date('Y-m-d H:i:s'));
        $date = $createdAt->format('M d Y');

      $num1 = Export::query()->count();
      if($num1!=0){
        return Excel::download(new Report_Export, 'Report('.$date.').xlsx');
        // return redirect('Export')->with('message','Export successful!');
      }else{
        return redirect('Export')->with('message1','Empty export file!');
      }
     
    }
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
     * @param  \App\Models\Export  $export
     * @return \Illuminate\Http\Response
     */
    public function show(Export $export)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Export  $export
     * @return \Illuminate\Http\Response
     */
    public function edit(Export $export)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Export  $export
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Export $export)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Export  $export
     * @return \Illuminate\Http\Response
     */
    public function destroy(Export $export)
    {
        //
    }
}
