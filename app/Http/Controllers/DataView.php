<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class DataView extends Controller
{
    function dash_view(){
        // $allreport = DB::table('reports')->where('Status', "New")->get();
        $data = DB::table('reports')->get();
        $allreport = DB::table('reports')->count();
        $newreport = DB::table('reports')->where('Status', "New")->count();
        $reviewedreport = DB::table('reports')->where('Status', "Reviewed")->count();

        $medical = DB::table('reports')->where('TypeOfIncident', "Medical Emergency")->count();
        $covid = DB::table('reports')->where('TypeOfIncident', "Covid-19")->count();
        $dengue = DB::table('reports')->where('TypeOfIncident', "Dengue")->count();
        $civil = DB::table('reports')->where('TypeOfIncident', "Civil Disturbance")->count();
        $vehicular = DB::table('reports')->where('TypeOfIncident', "Vehicular/Pedestrian Accident")->count();

        $med = DB::table('reports')->where('TypeOfIncident', "Medical Emergency")->sum('Num_Person_Involve');
        $cov = DB::table('reports')->where('TypeOfIncident', "Covid-19")->sum('Num_Person_Involve');
        $deng = DB::table('reports')->where('TypeOfIncident', "Dengue")->sum('Num_Person_Involve');
        $civ = DB::table('reports')->where('TypeOfIncident', "Civil Disturbance")->sum('Num_Person_Involve');
        $veh = DB::table('reports')->where('TypeOfIncident', "Vehicular/Pedestrian Accident")->sum('Num_Person_Involve');

        return view('dashboard',['data'=>$data,'allreport'=>$allreport ,'newreport'=>$newreport ,'reviewedreport'=>$reviewedreport,
        'medical'=>$medical,'covid'=>$covid ,'dengue'=>$dengue,'civil'=>$civil ,'vehicular'=>$vehicular,
        'med'=>$med,'cov'=>$cov,'deng'=>$deng,'civ'=>$civ,'veh'=>$veh
        ]);
    }
    function user_view(){
        $data = DB::table('reports')->where('UserId', auth()->user()->id)->get();
        return view('UserDash',['data' => $data]);
    }
}
