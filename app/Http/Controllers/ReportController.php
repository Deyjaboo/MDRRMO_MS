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

                 $createdAt = Carbon::parse(date('Y-m-d H:i:s'));
                 $year = $createdAt->format('Y');
              
                 $monthName = Carbon::now();
                 $month = $monthName->format('F');
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
