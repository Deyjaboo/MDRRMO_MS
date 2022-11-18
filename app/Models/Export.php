<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    use HasFactory;
    protected $fillable = [
        'Num_Person_Involve',
        'NameOfVictim',
        'Age',
        'Sex',
        'Address',
        'Vehicle_Used',
        'NameOfDriver',
        'ResponderTeam',
        'NameOfResponders',
        'Devices_Used',
        'Photos_By',
        'ReportedBy',
        'Date_Recorded',
        'Incident_Track_Num',
        'DateOfIncident',
        'Covid',
        'TypeOfIncident',
        'Informat_Contact',
        'IncidentLocation',
        'TimeOccured',
        'TimeReported',
        'TimeResponse',
        'TimeTerminated',
        'Incident_Des',
        'Picture',
        'Status',
        'Year',
        'Month',
        'UserId',
        'Remark',
    ];
}
