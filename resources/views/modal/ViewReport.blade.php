<!-- Modal start -->
<style>
   #IncidentDescription{
    text-align: justify;
    margin-right:10px;
   }
</style>

<div  id="ViewReportModal{{$data->id}}" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Details</h5>
      </div>
      <form action="editstudent" method="post" enctype="multipart/form-data" id="editForm">
      {{ csrf_field() }}
      <div class="modal-body">
					<!-- <div class="modal-body">
						<p>Are you sure you want to Delete this record?</p>
					</div> -->
                <div class="form_wrap fullname">
                <div class="form_item">
                   <b><label>Track No.<span class="text-danger"></span></label></b> 
                    <p name="TrackNo" id="TrackNo">{{$data->Incident_Track_Num}}</p>
                    <!-- <input type="text" name="TrackNo" id="TrackNo" class="form-control" placeholder="Student ID" disabled> -->
                </div>

                <div class="form_item">
                <b><label>Date of Incident<span class="text-danger"></span></label></b> 
                    <p name="DateOfIncident" id="DateOfIncident">{{$data->DateOfIncident}}</p>
                    <!-- <input type="date" name="DateOfIncident" id="DateOfIncident"  class="form-control" placeholder="Enter First Name" required> -->
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b> <label>Image<span class="text-danger"></span></label></b> 
                    <img src="images/{{$data->Picture}}" id="image" width="80%" height="80%"/>
                </div>
              
                
                
                <div class="form_item">
                <b> <label>Incident Description<span class="text-danger"></span></label></b> 
                <p name="IncidentDescription" id="IncidentDescription">{{$data->Incident_Des}}</p>
                </div>  </div>
               

                <br>
                <div class="form_wrap fullname">
                <div class="form_item">
                    <b><label>Covid Related<span class="text-danger"></span></label></b>
                    <p name="Covid" id="Covid"><i> {{$data->Covid}}</i></p>
                </div>
                <div class="form_item">
                <b><label>Type of Incident<span class="text-danger"></span></label></b>
                    <p name="TypeIncident" id="TypeIncident">{{$data->TypeOfIncident}}</p>
                </div>

                <div class="form_item">
                <b> <label>Informant Contact<span class="text-danger"></span></label></b>
                    <p name="Contact" id="Contact">{{$data->Informat_Contact}}</p>
                    <!-- <input type="text"  name="Contact" id="Contact" class="form-control" placeholder="Suffix"> -->
                    </div>
                </div>


               
                <div class="form_wrap fullname">
                <div class="form_item">
                <b> <label>Incident Location<span class="text-danger"></span></label></b>
                    <p name="IncidentLocation" id="IncidentLocation">{{$data->IncidentLocation}}</p>
                    <!-- <input type="text"  name="IncidentLocation" id="IncidentLocation" class="form-control" placeholder="" required> -->
                    </div>

                    <div class="form_item">
                    <b> <label>Time Occured<span class="text-danger"></span></label></b>
                    <p name="TimeOccured" id="TimeOccured">{{$data->TimeOccured}}</p>
                    <!-- <input type="time"  name="TimeOccured" id="TimeOccured" class="form-control" placeholder="" required> -->
                    </div>

                    <div class="form_item">
                    <b> <label>Time Reported<span class="text-danger"></span></label></b>
                    <p name="TimeReported" id="TimeReported">{{$data->TimeReported}}</p>
                    <!-- <input type="time"  name="TimeReported" id="TimeReported" class="form-control" placeholder="" required> -->
                    </div>

                   
                </div>

                <br>
                
                <div class="form_wrap fullname">

                    <div class="form_item">
                    <b><label>Time Response Iniated<span class="text-danger"></span></label></b>
                    <p name="TimeIniated" id="TimeIniated">{{$data->TimeResponse}}</p>
                    <!-- <input type="time"  name="TimeIniated" id="TimeIniated" class="form-control" placeholder="" required> -->
                    </div>

                    <div class="form_item">
                    <b><label>Time Response Teminated<span class="text-danger"></span></label></b>
                    <p name="TimeTeminated" id="TimeTeminated">{{$data->TimeTerminated}}</p>
                    <!-- <input type="time"  name="TimeTeminated" id="TimeTeminated" class="form-control" placeholder="" required> -->
                    </div>

                    <div class="form_item">
                    <b> <label>No. Persons Involved<span class="text-danger"></span></label></b>
                <p name="PersonsInvolved" id="PersonsInvolved">{{$data->Num_Person_Involve}}</p>
                <!-- <input type="text"  name="PersonsInvolved" id="PersonsInvolved" class="form-control" placeholder="" required> -->
                </div>


                </div>

              

                <div class="form_wrap fullname">

                <div class="form_item">
                <b> <label>Name of Person/s Involved<span class="text-danger"></span></label></b>
                <p name="NamePersonInvolved" id="NamePersonInvolved">{{$data->NameOfVictim}}</p>
                <!-- <input type="text"  name="NamePersonInvolved" id="NamePersonInvolved" class="form-control" placeholder="" required> -->
                </div>
                <div class="form_item">
                <b> <label>Age<span class="text-danger"></span></label></b>
                <p name="Age1" id="Age1">{{$data->Age}}</p>
                <!-- <input type="text"  name="Age1" id="Age1" class="form-control" placeholder="" required> -->
                </div>

                <div class="form_item">
                <b><label>Sex<span class="text-danger"></span></label></b>
                <p name="Sex1" id="Sex1">{{$data->Sex}}</p>
                <!-- <select class="form-control" id="Sex1" name="Sex1" required>
                        <option value ="Male">Male</option>
                        <option value ="Female">Female</option>
                    </select> -->
                </div>

                </div>


                

                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Address<span class="text-danger"></span></label></b>
                <p name="Address1" id="Address1">{{$data->Address}}</p>
                <!-- <input type="text"  name="Address1" id="Address1" class="form-control" placeholder="" required> -->
                </div>

                <div class="form_item">
                <b> <label>Vehicle Used<span class="text-danger"></span></label></b>
                <p name="VehicleUsed" id="VehicleUsed">{{$data->Vehicle_Used}}</p>
                <!-- <input type="text"  name="VehicleUsed" id="VehicleUsed" class="form-control" placeholder="" required> -->
                </div>

                <div class="form_item">
                <b><label>Name of driver<span class="text-danger"></span></label></b>
                <p name="NameDriver" id="NameDriver">{{$data->NameOfDriver}}</p>
                <!-- <input type="text"  name="NameDriver" id="NameDriver" class="form-control" placeholder="" required> -->
                </div>
                </div>


                <div class="form_wrap fullname">
                <div class="form_item">
                <b> <label>Team Responder<span class="text-danger"></span></label></b>
                <p name="TeamResponder" id="TeamResponder">{{$data->ResponderTeam}}</p>
                <!-- <input type="text"  name="TeamResponder" id="TeamResponder" class="form-control" placeholder="" required> -->
                </div>

                <div class="form_item">
                <b> <label>Photo Taken By<span class="text-danger"></span></label></b>
                <p name="PhotoBy" id="PhotoBy">{{$data->Photos_By}}</p>
                <!-- <input type="text"  name="PhotoBy" id="PhotoBy" class="form-control" placeholder="" required> -->
                </div>

                <div class="form_item">
                <b> <label>Devices Used<span class="text-danger"></span></label></b>
                <p name="DevicesUsed" id="DevicesUsed">{{$data->Devices_Used}}</p>
                <!-- <input type="text"  name="DevicesUsed" id="DevicesUsed" class="form-control" placeholder="" required> -->
                </div>
                </div>

                <div class="form_wrap fullname">
                <div class="form_item">
                <b> <label>Name of Responders<span class="text-danger"></span></label></b>
                <p name="NameResponder" id="NameResponder">{{$data->NameOfResponders}}</p>
                <!-- <input type="text"  name="NameResponder" id="NameResponder" class="form-control" placeholder="" required> -->
                </div>

                

                <div class="form_item">
                <b> <label>Report Prepared By<span class="text-danger"></span></label></b>
                <p name="Reported" id="Reported">{{$data->ReportedBy}}</p>
                <!-- <input type="text"  name="Reported" id="Reported" class="form-control" placeholder="" required> -->
                </div>

                <div class="form_item">
                <b> <label>DateRecorded<span class="text-danger"></span></label></b>
                <p name="DateRecorded" id="DateRecorded">{{$data->Date_Recorded}}</p>
                </div>

                </div>
                
                <div class="form_wrap fullname">
                <div class="form_item">
                <b><label>Status<span class="text-danger"></span></label></b>
                <p name="Status" id="Status">{{$data->Status}}</p>
                </div>

                <div class="form_item">
                <b><label>Remark<span class="text-danger"></span></label></b>
                <p name="Remark" id="Remark">{{$data->Remark}}</p>
                </div>
                </div>
                
                

      </div>
      <div class="modal-footer">
          <!-- <input type="submit" class="btn btn-primary" value="Edit"> -->
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Close">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal end -->