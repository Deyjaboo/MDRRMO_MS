<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class ReportController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request){
        // $request->validate([
        //     'Hon_Dismissal' => ['required_without_all: SO, Diploma,TOR,Form137,GoodMoral'],
        //     'SO' => ['required_without_all: Hon_Dismissal, Diploma,TOR,Form137,GoodMoral'],
        //     'Diploma' => ['required_without_all: Hon_Dismissal, SO,TOR,Form137,GoodMoral'],
        //     'TOR' => ['required_without_all: Hon_Dismissal, SO,Diploma,Form137,GoodMoral'],
        //     'Form137' => ['required_without_all: Hon_Dismissal, SO,Diploma,TOR,GoodMoral'],
        //     'GoodMoral' => ['required_without_all: Hon_Dismissal, SO,Diploma,TOR,Form137'],
        // ]);
            $data = new Report();
                $data->DateOfIncident = $request->input('DateIncident');

                 $createdAt = Carbon::parse(date($request->input('DateIncident')));
                 $year = $createdAt->format('Y');
                //  $monthName = Carbon::now();
                 $month = $createdAt->format('F');
                // $count = DB::table('reports')->count();
                $count = DB::table('reports')->where('Year', $year)->count();
                // $data->Incident_Track_Num = $request->input('IncidentTrackNum');
                $data->Incident_Track_Num = "N-" . $year . "-". ($count + 1);
                $data->NameOfVictim = $request->input('NamePersonsInvolved');
                $data->Address = $request->input('Address');
                $data->Age = $request->input('Age');
                $data->Sex = $request->input('Sex');
                $data->Covid = $request->input('Covid');
                $data->Num_Person_Involve = $request->input('PersonInvolved');
                $data->NameOfDriver = $request->input('NameDriver');
                $data->Vehicle_Used = $request->input('VehicleUsed');
                $data->Devices_Used = $request->input('DevicesUsed');
                $data->ResponderTeam = $request->input('ResponderTeam');
                $data->NameOfResponders = $request->input('NameResponders');
                $data->Photos_By = $request->input('PhotoBy');
                $data->Date_Recorded = $request->input('DateRecorded');
                $data->TypeOfIncident = $request->input('TypeIncident');
                $data->Informat_Contact = $request->input('InformantContact');
                $data->IncidentLocation = $request->input('IncidentLocation');
                $data->TimeOccured = $request->input('TimeOccured');
                $data->TimeReported = $request->input('TimeReported');
                $data->TimeResponse = $request->input('TimeResponse');
                $data->TimeTerminated = $request->input('TimeResponseTerminated');
                $data->Incident_Des = $request->input('IncidentDescription');
                $data->ReportedBy = auth()->user()->name;
                //for picture
                $file1 = $request->file('picture');
                $extension = $file1->getClientOriginalName();
                $filename = $extension;
                $file1->move('images/', $filename);
                $data->Picture = $filename;
                //for picture
                $data->Year = $year;
                $data->Month = $month;
                $data->UserId = auth()->user()->id;
                $data->Remark = "-";
                $data->Status = "New";
            $data->save();

            if (auth()->user()->role == "admin") {
                return redirect('dashboard')->with('message','Report is recorded!');
            }
            if (auth()->user()->role == "user") {
                return redirect('UserDash')->with('message','Report is recorded!');
            }
 
    }
    public function edit_function($id)
    {
    // $data = DB::table('reports')->get();
      $data = DB::select('select * from reports where Incident_Track_Num = ?', [$id]);

      return view('/EditReport',['data'=>$data]);
    }
    public function View_Report_Details($id)
    {
        // $data = DB::table('companies')->get();
        $data = DB::select('select * from reports where id = ?', [$id]);
        return view('modal.ViewReport',['data'=>$data]);
    }
    public function Edit_Report_Details($id)
    {
        // $data = DB::table('companies')->get();
        $data = DB::select('select * from reports where id = ?', [$id]);
        return view('modal.EditReport',['data'=>$data]);
    }

    public function update_report(Request $request, $id)
    {
        // $request->validate([
        //     'StudentId' => ['required', 'min:7'],
        //     'FirstName' => ['required', 'string', 'max:255', 'regex:/^([^0-9]*)$/'],
        //     'LastName' => ['required', 'string', 'max:255','regex:/^([^0-9]*)$/'],
        // ]);
                $DateOfIncident = $request->input('DateOfIncident');
                // formating date
                $createdAt = Carbon::parse(date($request->input('DateOfIncident')));
                $year = $createdAt->format('Y');
                $month = $createdAt->format('F');
                // formating date
                $NameOfVictim = $request->input('NameOfVictim');
                $Address = $request->input('Address');
                $Age = $request->input('Age');
                $Sex = $request->input('Sex');
                $Covid = $request->input('Covid');
                $Num_Person_Involve = $request->input('Num_Person_Involve');
                $NameOfDriver = $request->input('NameOfDriver');
                $Vehicle_Used = $request->input('Vehicle_Used');
                $Devices_Used = $request->input('Devices_Used');
                $ResponderTeam = $request->input('ResponderTeam');
                $NameOfResponders = $request->input('NameOfResponders');
                $Photos_By = $request->input('Photos_By');
                $Date_Recorded = $request->input('Date_Recorded');
                $TypeOfIncident = $request->input('TypeOfIncident');
                $Informat_Contact = $request->input('Informat_Contact');
                $IncidentLocation = $request->input('IncidentLocation');
                $TimeOccured = $request->input('TimeOccured');
                $TimeReported = $request->input('TimeReported');
                $TimeResponse = $request->input('TimeResponse');
                $TimeTerminated = $request->input('TimeTerminated');
                $Incident_Des = $request->input('Incident_Des');
                $Year = $year;
                $Month = $month;
                if($request->input('Remark') == "-" || $request->input('Remark') == ""){
                    $Remark = "-";
                }else{
                    $Remark = $request->input('Remark');
                }
                // $Status = $request->input('Status');
                $Status = "Reviewed";

        DB::table('reports')
        ->where('id', $id)
        ->update(array(
            'DateOfIncident' => $DateOfIncident,
            'NameOfVictim' => $NameOfVictim,
            'Address' => $Address,
            'Age' => $Age,
            'Sex' => $Sex,
            'Covid' => $Covid,
            'Num_Person_Involve' => $Num_Person_Involve,
            'NameOfDriver' => $NameOfDriver,
            'Vehicle_Used' => $Vehicle_Used,
            'Devices_Used' => $Devices_Used,
            'ResponderTeam' => $ResponderTeam,
            'NameOfResponders' => $NameOfResponders,
            'Photos_By' => $Photos_By,
            'Date_Recorded' => $Date_Recorded,
            'TypeOfIncident' => $TypeOfIncident,
            'Informat_Contact' => $Informat_Contact,
            'IncidentLocation' => $IncidentLocation,
            'TimeOccured' => $TimeOccured,
            'TimeReported' => $TimeReported,
            'TimeResponse' => $TimeResponse,
            'TimeTerminated' => $TimeTerminated,
            'Incident_Des' => $Incident_Des,
            'Year' => $year,
            'Month' => $month,
            'Remark' => $Remark,
            'Status' => $Status,
        ));
        
        if(auth()->user()->role == "admin"){
            return redirect('dashboard')->with('message','Report updated successfully!');
        }else{
            return redirect('UserDash')->with('message','Report updated successfully!');
        }
        
    }

    function NewReport_show(){
        $data = DB::table('reports')->where('Status', "New")->get();
        $allreport = DB::table('reports')->count();
        $newreport = DB::table('reports')->where('Status', "New")->count();
        $reviewedreport = DB::table('reports')->where('Status', "Reviewed")->count();

        return view('NewReport',['data'=>$data,'allreport'=>$allreport ,'newreport'=>$newreport ,'reviewedreport'=>$reviewedreport]);
    }
    function ReviewedReport_show(){
        $data = DB::table('reports')->where('Status', "Reviewed")->get();
        $allreport = DB::table('reports')->count();
        $newreport = DB::table('reports')->where('Status', "New")->count();
        $reviewedreport = DB::table('reports')->where('Status', "Reviewed")->count();

        return view('ReviewedReport',['data'=>$data,'allreport'=>$allreport ,'newreport'=>$newreport ,'reviewedreport'=>$reviewedreport]);
    }
    function report_show(){
        $data = DB::table('reports')->get();
        $year = DB::table('reports')->value('Year');

        return view('Export',['data'=>$data, 'year'=>$year]);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
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
