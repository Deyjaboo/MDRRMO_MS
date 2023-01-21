<!-- Modal start -->
<div  id="EditReportForEmployee" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle1">Edit Report Details</h5>
      </div>
     
      <div class="modal-body">
      <form action="{{ route ('report_edit' , $data->id) }}" method="post" enctype="multipart/form-data">
      
                <div class="form_wrap fullname">
                    <div class="form_item">
                        <b> <label>Track No.<span class="text-danger"></span></label></b>
                        <input type="text" name="TrackNo" id="TrackNo" class="form-control" placeholder="Student ID" value="{{$data->Incident_Track_Num}}" disabled>
                    </div>
                    <div class="form_item">
                        <b><label>Date of Incident<span class="text-danger"></span></label></b>
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
                        <textarea class="form-control" name="Incident_Des" id="Incident_Des" cols="30" rows="10">{{$data->Incident_Des}}</textarea>
                    </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                    <div class="form_item">
                    <b><label>Covid Related<span class="text-danger"></span></label></b>
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
                        <select id="TypeOfIncident" name="TypeOfIncident" class="form-control" required>
                            @if($data->TypeOfIncident == 'Medical Emergency')
                            <option value ="Medical Emergency" selected>Medical Emergency</option>
                            <option value ="Covid-19">Covid-19</option>
                            <option value ="Dengue">Dengue</option>
                            <option value ="Civil Disturbance">Civil Disturbance</option>
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                            @elseif($data->TypeOfIncident == 'Covid-19')
                            <option value ="Medical Emergency" >Medical Emergency</option>
                            <option value ="Covid-19" selected>Covid-19</option>
                            <option value ="Dengue">Dengue</option>
                            <option value ="Civil Disturbance">Civil Disturbance</option>
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                            @elseif($data->TypeOfIncident == 'Dengue')
                            <option value ="Medical Emergency" >Medical Emergency</option>
                            <option value ="Covid-19" >Covid-19</option>
                            <option value ="Dengue" selected>Dengue</option>
                            <option value ="Civil Disturbance">Civil Disturbance</option>
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                            @elseif($data->TypeOfIncident == 'Civil Disturbance')
                            <option value ="Medical Emergency" >Medical Emergency</option>
                            <option value ="Covid-19">Covid-19</option>
                            <option value ="Dengue">Dengue</option>
                            <option value ="Civil Disturbance" selected>Civil Disturbance</option>
                            <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                            @else
                            <option value ="Medical Emergency">Medical Emergency</option>
                            <option value ="Covid-19">Covid-19</option>
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
                        <input type="text"  name="Informat_Contact" id="Informat_Contact" class="form-control" placeholder="Informant Contact" value="{{$data->Informat_Contact}}" required>
                    </div>
                    <div class="form_item">
                        <b><label>Incident Location<span class="text-danger"></span></label></b>
                        <input type="text"  name="IncidentLocation" id="IncidentLocation" class="form-control" placeholder="Location of Incident" value="{{$data->IncidentLocation}}" required>
                    </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                    <div class="form_item">
                        <b><label>Time Occured<span class="text-danger"></span></label></b>
                        <input type="time"  name="TimeOccured" id="TimeOccured" class="form-control" placeholder="Time Occured" value="{{$data->TimeOccured}}" required>
                    </div>
                    <div class="form_item">
                        <b><label>Time Reported<span class="text-danger"></span></label></b>
                        <input type="time"  name="TimeReported" id="TimeReported" class="form-control" placeholder="Time Reported" value="{{$data->TimeReported}}" required>
                    </div>
                </div>

                <div class="form_wrap fullname">
                    <div class="form_item">
                        <b><label>Time Response Iniated<span class="text-danger"></span></label></b>
                        <input type="time"  name="TimeResponse" id="TimeResponse" class="form-control" placeholder="Time Response" value="{{$data->TimeResponse}}" required>
                    </div>
                    <div class="form_item">
                        <b><label>Time Response Teminated<span class="text-danger"></span></label></b>
                        <input type="time"  name="TimeTerminated" id="TimeTerminated" class="form-control" placeholder="Time Terminated" value="{{$data->TimeTerminated}}" required>
                    </div>
                </div>

                <div class="form_wrap fullname">
                    <div class="form_item">
                        <b><label>No. Persons Involved<span class="text-danger"></span></label></b>
                        <input type="text"  name="Num_Person_Involve" id="Num_Person_Involve" class="form-control" placeholder="Number of persons involved" value="{{$data->Num_Person_Involve}}" required>
                    </div>
                    <div class="form_item">
                        <b><label>Name of Person/s Involved<span class="text-danger"></span></label></b>
                        <input type="text"  name="NameOfVictim" id="NameOfVictim" class="form-control" placeholder="Name Of Persons involved" value="{{$data->NameOfVictim}}" required>
                    </div>
                </div>

                <div class="form_wrap fullname">
                    <div class="form_item">
                        <b><label>Age<span class="text-danger"></span></label></b>
                        <input type="text"  name="Age" id="Age" class="form-control" placeholder="Age" value="{{$data->Age}}" required>
                    </div>

                    <div class="form_item">
                        <b><label>Sex<span class="text-danger"></span></label></b>
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
                <input type="text"  name="Address" id="Address" class="form-control" placeholder="Address" value="{{$data->Address}}" required>
                </div>

                <div class="form_item">
                <b><label>Vehicle Used<span class="text-danger"></span></label></b>
                <input type="text"  name="Vehicle_Used" id="Vehicle_Used" class="form-control" placeholder="Vehicle Used" value="{{$data->Vehicle_Used}}" required>
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Name of driver<span class="text-danger"></span></label></b>
                <input type="text"  name="NameOfDriver" id="NameOfDriver" class="form-control" placeholder="Name Of Driver" value="{{$data->NameOfDriver}}" required>
                </div>

                <div class="form_item">
                <b><label>Team Responder<span class="text-danger"></span></label></b>
                <input type="text"  name="ResponderTeam" id="ResponderTeam" class="form-control" placeholder="Responder Team" value="{{$data->ResponderTeam}}" required>
                </div>

                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Name of Responders<span class="text-danger"></span></label></b>
                <input type="text"  name="NameOfResponders" id="NameOfResponders" class="form-control" placeholder="Name of Responders" value="{{$data->NameOfResponders}}" required>
                </div>

                <div class="form_item">
                <b><label>Devices Used<span class="text-danger"></span></label></b>
                <input type="text"  name="Devices_Used" id="Devices_Used" class="form-control" placeholder="Devices Used" value="{{$data->Devices_Used}}" required>
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Photo Taken By<span class="text-danger"></span></label></b>
                <input type="text"  name="Photos_By" id="Photos_By" class="form-control" placeholder="Photos Taken By" value="{{$data->Photos_By}}" required>
                </div>

                <div class="form_item">
                <b><label>Report Prepared By<span class="text-danger"></span></label></b>
                <input type="text"  name="ReportedBy" id="ReportedBy" class="form-control" placeholder="Reported By" value="{{$data->ReportedBy}}" disabled>
                </div>

                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>DateRecorded<span class="text-danger"></span></label></b>
                <input type="date"  name="Date_Recorded" id="Date_Recorded" class="form-control" placeholder="Date Recorded" value="{{$data->Date_Recorded}}" required>
                </div>

            
                <div class="form_item">
                <b> <label>Remark<span class="text-danger"></span></label></b>
                <textarea class="form-control"  name="Remark" id="Remark" cols="10" rows="5" disabled>{{$data->Remark}}</textarea>
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
          <button type="submit" class="btn btn-primary">Save</button>
          <!-- <a href="report_edit/{{$data->id}}" class="btn btn-success">Save</a> -->
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      </div>
      </form>
      
    </div>
  </div>
</div>

<!-- Modal end -->
