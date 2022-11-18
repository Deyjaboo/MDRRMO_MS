<!-- Modal start -->
<div  id="EditReportModal{{$data->id}}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Report Details</h5>
      </div>
      <form action="{{ route ('UpdateReport' , $data->id) }}" method="post" enctype="multipart/form-data" id="editForm">
      {{ csrf_field() }}
      <div class="modal-body">
					<!-- <div class="modal-body">
						<p>Are you sure you want to Delete this record?</p>
					</div> -->
                <!-- <input type="hiddend" name="id" id="id" class="form-control" placeholder="Student ID" value="{{$data->id}}" disabled> -->
                <div class="form_wrap fullname">
                <div class="form_item">
                   <b> <label>Track No.<span class="text-danger"></span></label></b>
                    <!-- <p name="TrackNo" id="TrackNo">{{$data->Incident_Track_Num}}</p> -->
                    <input type="text" name="TrackNo" id="TrackNo" class="form-control" placeholder="Student ID" value="{{$data->Incident_Track_Num}}" disabled>
                </div>

                <div class="form_item">
                <b><label>Date of Incident<span class="text-danger"></span></label></b>
                    <!-- <p name="DateOfIncident" id="DateOfIncident">{{$data->DateOfIncident}}</p> -->
                    <input type="date" name="DateOfIncident" id="DateOfIncident"  class="form-control" placeholder="Enter First Name" value="{{$data->DateOfIncident}}" required>
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Image<span class="text-danger"></span></label></b>
                    <img src="images/{{$data->Picture}}" id="image"  width="80%" height="80%"/>
                </div>



                <div class="form_item">
                <b> <label>Incident Description<span class="text-danger"></span></label></b>
                <!-- <p name="IncidentDescription" id="IncidentDescription">{{$data->Incident_Des}}</p> -->
                 <!-- <input type="text"  name="Incident_Des" id="Incident_Des" class="form-control" placeholder="Suffix" value="{{$data->Incident_Des}}" required> -->
                <textarea class="form-control" name="Incident_Des" id="Incident_Des" cols="30" rows="10">{{$data->Incident_Des}}</textarea>
                </div></div>


                <br>
                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Covid Related<span class="text-danger"></span></label></b>
                    <!-- <p name="Covid" id="Covid">{{$data->Covid}}</p> -->
                    <select id="Covid" name="Covid" class="form-control" required>
                        @if($data->Covid == 'Yes')
                        <option value="Yes" selected>Yes</option>
                        <option value ="No">No</option>
                        @else
                        <option value="Yes">Yes</option>
                        <option value ="No" selected>No</option>
                        @endif
                    </select>
                </div>
                <div class="form_item">
                <b> <label>Type of Incident<span class="text-danger"></span></label></b>
                    <!-- <p name="TypeIncident" id="TypeIncident">{{$data->TypeOfIncident}}</p> -->
                    <select id="TypeOfIncident" name="TypeOfIncident" class="form-control" required>
                        @if($data->TypeOfIncident == 'Medical Emergency')
                        <option value ="Medical Emergency" selected>Medical Emergency</option>
                        <option value ="Covid">Covid-19</option>
                        <option value ="Dengue">Dengue</option>
                        <option value ="Civil Disturbance">Civil Disturbance</option>
                        <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->TypeOfIncident == 'Covid-19')
                        <option value ="Medical Emergency" >Medical Emergency</option>
                        <option value ="Covid" selected>Covid-19</option>
                        <option value ="Dengue">Dengue</option>
                        <option value ="Civil Disturbance">Civil Disturbance</option>
                        <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->TypeOfIncident == 'Dengue')
                        <option value ="Medical Emergency" >Medical Emergency</option>
                        <option value ="Covid" >Covid-19</option>
                        <option value ="Dengue" selected>Dengue</option>
                        <option value ="Civil Disturbance">Civil Disturbance</option>
                        <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @elseif($data->TypeOfIncident == 'Civil Disturbance')
                        <option value ="Medical Emergency" >Medical Emergency</option>
                        <option value ="Covid">Covid-19</option>
                        <option value ="Dengue">Dengue</option>
                        <option value ="Civil Disturbance" selected>Civil Disturbance</option>
                        <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                        @else
                        <option value ="Medical Emergency">Medical Emergency</option>
                        <option value ="Covid">Covid-19</option>
                        <option value ="Dengue">Dengue</option>
                        <option value ="Civil Disturbance">Civil Disturbance</option>
                        <option value ="Vehicular/Pedestrian Accident" selected>Vehicular/Pedestrian Accident</option>
                        @endif
                    </select>
                </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                    <div class="form_item">
                    <b> <label>Informant Contact<span class="text-danger"></span></label></b>
                    <!-- <p name="Contact" id="Contact">{{$data->Informat_Contact}}</p> -->
                    <input type="text"  name="Informat_Contact" id="Informat_Contact" class="form-control" placeholder="Informant Contact" value="{{$data->Informat_Contact}}" required>
                    </div>
                    <div class="form_item">
                    <b><label>Incident Location<span class="text-danger"></span></label></b>
                    <!-- <p name="IncidentLocation" id="IncidentLocation">{{$data->IncidentLocation}}</p> -->
                    <input type="text"  name="IncidentLocation" id="IncidentLocation" class="form-control" placeholder="Location of Incident" value="{{$data->IncidentLocation}}" required>
                    </div>
                </div>

                <br>
                <div class="form_wrap fullname">

                    <div class="form_item">
                    <b><label>Time Occured<span class="text-danger"></span></label></b>
                    <!-- <p name="TimeOccured" id="TimeOccured">{{$data->TimeOccured}}</p> -->
                    <input type="time"  name="TimeOccured" id="TimeOccured" class="form-control" placeholder="Time Occured" value="{{$data->TimeOccured}}" required>
                    </div>

                    <div class="form_item">
                    <b><label>Time Reported<span class="text-danger"></span></label></b>
                    <!-- <p name="TimeReported" id="TimeReported">{{$data->TimeReported}}</p> -->
                    <input type="time"  name="TimeReported" id="TimeReported" class="form-control" placeholder="Time Reported" value="{{$data->TimeReported}}" required>
                    </div>
                </div>
                <div class="form_wrap fullname">

                    <div class="form_item">
                    <b><label>Time Response Iniated<span class="text-danger"></span></label></b>
                    <!-- <p name="TimeIniated" id="TimeIniated">{{$data->TimeResponse}}</p> -->
                    <input type="time"  name="TimeResponse" id="TimeResponse" class="form-control" placeholder="Time Response" value="{{$data->TimeResponse}}" required>
                    </div>

                    <div class="form_item">
                    <b><label>Time Response Teminated<span class="text-danger"></span></label></b>
                    <!-- <p name="TimeTeminated" id="TimeTeminated">{{$data->TimeTerminated}}</p> -->
                    <input type="time"  name="TimeTerminated" id="TimeTerminated" class="form-control" placeholder="Time Terminated" value="{{$data->TimeTerminated}}" required>
                    </div>
                </div>



                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>No. Persons Involved<span class="text-danger"></span></label></b>
                <!-- <p name="PersonsInvolved" id="PersonsInvolved">{{$data->Num_Person_Involve}}</p> -->
                <input type="text"  name="Num_Person_Involve" id="Num_Person_Involve" class="form-control" placeholder="Number of persons involved" value="{{$data->Num_Person_Involve}}" required>
                </div>

                <div class="form_item">
                <b><label>Name of Person/s Involved<span class="text-danger"></span></label></b>
                <!-- <p name="NamePersonInvolved" id="NamePersonInvolved">{{$data->NameOfVictim}}</p> -->
                <input type="text"  name="NameOfVictim" id="NameOfVictim" class="form-control" placeholder="Name Of Persons involved" value="{{$data->NameOfVictim}}" required>
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Age<span class="text-danger"></span></label></b>
                <!-- <p name="Age1" id="Age1">{{$data->Age}}</p> -->
                <input type="text"  name="Age" id="Age" class="form-control" placeholder="Age" value="{{$data->Age}}" required>
                </div>

                <div class="form_item">
                <b><label>Sex<span class="text-danger"></span></label></b>
                <!-- <p name="Sex1" id="Sex1">{{$data->Sex}}</p> -->
                <select id="Sex" name="Sex" class="form-control" required>
                    @if($data->Sex == 'Male')
                    <option value="Male" selected>Male</option>
                    <option value ="Female">Female</option>
                    @else
                    <option value ="Male">Male</option>
                    <option value ="Female" selected>Female</option>
                    @endif
                </select>
                </div>
                </div>


                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Address<span class="text-danger"></span></label></b>
                <!-- <p name="Address1" id="Address1">{{$data->Address}}</p> -->
                <input type="text"  name="Address" id="Address" class="form-control" placeholder="Address" value="{{$data->Address}}" required>
                </div>

                <div class="form_item">
                <b><label>Vehicle Used<span class="text-danger"></span></label></b>
                <!-- <p name="VehicleUsed" id="VehicleUsed">{{$data->Vehicle_Used}}</p> -->
                <input type="text"  name="Vehicle_Used" id="Vehicle_Used" class="form-control" placeholder="Vehicle Used" value="{{$data->Vehicle_Used}}" required>
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Name of driver<span class="text-danger"></span></label></b>
                <!-- <p name="NameDriver" id="NameDriver">{{$data->NameOfDriver}}</p> -->
                <input type="text"  name="NameOfDriver" id="NameOfDriver" class="form-control" placeholder="Name Of Driver" value="{{$data->NameOfDriver}}" required>
                </div>

                <div class="form_item">
                <b><label>Team Responder<span class="text-danger"></span></label></b>
                <!-- <p name="TeamResponder" id="TeamResponder">{{$data->ResponderTeam}}</p> -->
                <input type="text"  name="ResponderTeam" id="ResponderTeam" class="form-control" placeholder="Responder Team" value="{{$data->ResponderTeam}}" required>
                </div>

                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Name of Responders<span class="text-danger"></span></label></b>
                <!-- <p name="NameResponder" id="NameResponder">{{$data->NameOfResponders}}</p> -->
                <input type="text"  name="NameOfResponders" id="NameOfResponders" class="form-control" placeholder="Name of Responders" value="{{$data->NameOfResponders}}" required>
                </div>

                <div class="form_item">
                <b><label>Devices Used<span class="text-danger"></span></label></b>
                <!-- <p name="DevicesUsed" id="DevicesUsed">{{$data->Devices_Used}}</p> -->
                <input type="text"  name="Devices_Used" id="Devices_Used" class="form-control" placeholder="Devices Used" value="{{$data->Devices_Used}}" required>
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Photo Taken By<span class="text-danger"></span></label></b>
                <!-- <p name="PhotoBy" id="PhotoBy">{{$data->Photos_By}}</p> -->
                <input type="text"  name="Photos_By" id="Photos_By" class="form-control" placeholder="Photos Taken By" value="{{$data->Photos_By}}" required>
                </div>

                <div class="form_item">
                <b><label>Report Prepared By<span class="text-danger"></span></label></b>
                <!-- <p name="Reported" id="Reported">{{$data->ReportedBy}}</p> -->
                <input type="text"  name="ReportedBy" id="ReportedBy" class="form-control" placeholder="Reported By" value="{{$data->ReportedBy}}" disabled>
                </div>

                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>DateRecorded<span class="text-danger"></span></label></b>
                <!-- <p name="DateRecorded" id="DateRecorded">{{$data->Date_Recorded}}</p> -->
                <input type="date"  name="Date_Recorded" id="Date_Recorded" class="form-control" placeholder="Date Recorded" value="{{$data->Date_Recorded}}" required>
                </div>

                <!-- <div class="form_item">
                <label>Status<span class="text-danger"></span></label>
                <select id="Status" name="Status" class="form-control" required>
                    @if($data->Status == 'New')
                    <option value="New" selected>New</option>
                    <option value ="Editing">Editing</option>
                    <option value ="Reviewed">Reviewed</option>
                    @elseif($data->Status == 'Editing')
                    <option value="New" >New</option>
                    <option value ="Editing" selected>Editing</option>
                    <option value ="Reviewed">Reviewed</option>
                    @else
                    <option value="New">New</option>
                    <option value ="Editing" >Editing</option>
                    <option value ="Reviewed" selected>Reviewed</option>
                    @endif
                </select>
                </div> -->
                <div class="form_item">
                <b> <label>Remark<span class="text-danger"></span></label></b>
                <textarea class="form-control"  name="Remark" id="Remark" cols="10" rows="5">{{$data->Remark}}</textarea>
                </div>
                </div>

                <!-- <div class="form_wrap fullname">
                <div class="form_item">
                <label>Remark<span class="text-danger"></span></label>
                <textarea class="form-control"  name="Remark" id="Remark" cols="10" rows="5">{{$data->Remark}}</textarea>
                </div>
                </div> -->

      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Submit">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal end -->
