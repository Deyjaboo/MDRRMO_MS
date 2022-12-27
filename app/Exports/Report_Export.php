<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

use App\Models\Export;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Sheet;
class Report_Export implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return Export::select(
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
        // 'Picture',
        // 'Status',
        // 'Year',
        // 'Month',
        // 'UserId',
        'Remark',
            )->orderBy('created_at')->get();
            // substr('Mname', 0, 1) getting first string
    }
    public function headings(): array
    {
        return [
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
        // 'Picture',
        // 'Status',
        // 'Year',
        // 'Month',
        // 'UserId',
        'Remark',
        ];
    }

    public function registerEvents(): array
    {
        return [

            AfterSheet::class    => function(AfterSheet $event) {
                // All headers

                $cellRange = 'A1:Y1';
                $header = [
                    'font' => [
                        'family'     => 'Calibri',
                        'size'       => '10',
                        'bold'       => true
                    ],

                ];
                $event->sheet->getStyle($cellRange)->applyFromArray($header);
                //BODY
                $styleArray = [
                    'font' => [
                        'family'     => 'Calibri',
                        'size'       => '7',
                    ],
                ];
                $num1 = Export::query()->count()+1;
                $body1 = 'A1'.':Y'.$num1; //RANGE OF CELL
                $event->sheet->getStyle($body1)->applyFromArray($styleArray)->getBorders()->getAllBorders()->setBorderStyle(\PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN);;
                //Border
                // $event->sheet->getStyle($body1)


                //ORIENTATION
                $event->sheet
                ->getPageSetup()
                ->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
            },

        ];
    }
    
}
