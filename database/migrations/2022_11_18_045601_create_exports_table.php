<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exports', function (Blueprint $table) {
            $table->id();
            $table->integer('Num_Person_Involve');
            $table->longText('NameOfVictim');
            $table->string('Age');
            $table->string('Sex');
            $table->longText('Address');
            $table->string('Vehicle_Used');
            $table->string('NameOfDriver');
            $table->string('ResponderTeam');
            $table->longText('NameOfResponders');
            $table->longText('Devices_Used');
            $table->string('Photos_By');
            $table->string('ReportedBy');
            $table->string('Date_Recorded');
            $table->string('Incident_Track_Num')->unique();
            $table->string('DateOfIncident');
            $table->string('Covid');
            $table->string('TypeOfIncident');
            $table->string('Informat_Contact');
            $table->longText('IncidentLocation');
            $table->string('TimeOccured');
            $table->string('TimeReported');
            $table->string('TimeResponse');
            $table->string('TimeTerminated');
            $table->longText('Incident_Des');
            $table->string('Status');
            $table->string('Picture');
            $table->string('Year');
            $table->string('Month');
            $table->string('UserId');
            $table->string('Remark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exports');
    }
};
