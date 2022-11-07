<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/style.css" rel="stylesheet">
    <title>Add Report</title>
</head>
<style>
    
#btncancel{
  background: red;
}

.wrapper{
  max-width: 1250px;
  width: 60%;
  margin: 30px auto 0;
  padding: 10px;
}

.wrapper .form_container{
  background: #fff;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
}

.wrapper .form_container .form_item{
  margin-bottom: 25px;
}

.form_wrap.fullname,
.form_wrap.select_box{
  display: flex;
}

.form_wrap.fullname .form_item,
.form_wrap.select_box .form_item{
  width: 50%;
}

.form_wrap.fullname .form_item:first-child,
.form_wrap.select_box .form_item:first-child{
  margin-right: 4%;
}

.wrapper .form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_item input[type="text"],input[type="date"],input[type="time"],
.form_item select{
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"]:focus{
  border-color: #6271f0;
}
.select_box{
    width: 90%;
    padding-left:20px
}
.btn button[type="submit"]{
  background: #1598d4;
  border: 1px solid #1598d4;
  padding: 10px;
  max-width: 100%;
  width:500px ;
  font-size: 16px;
  letter-spacing: 1px;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */

  .btn button[type="submit"]{
    width: 500px;
}
}


.form-input {
  width:350px;
  padding:20px;
  background:#fff;
  box-shadow: -3px -3px 6px rgba(94, 100, 121, 0.200),
              3px 3px 6px rgba(94, 100, 121, 0.200);
}
.form-input input {
  display:none;

}
.form-input label {
  display:block;
  width:45%;
  height:45px;
  margin-left: 25%;
  line-height:50px;
  text-align:center;
  background:#1172c2;
  color:#fff;
  font-size:15px;
  max-width: 100%;  
  font-family:"Open Sans",sans-serif;
  text-transform:Uppercase;
  font-weight:600;
  border-radius:5px;
  cursor:pointer;
}

.form-input img {
  width:100%;
  display:none;

  margin-bottom:30px;
}

.button {
  background-color: #1172c2; 
  border: none;
  color: white;
  padding: 10px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 3px;
  margin-top: 10px;
  font-family:"Open Sans",sans-serif;
 
  
}

#right {
        float: right;
      }

.form-input img {
   width:250px;
   height:200px;
   object-fit:fill;
   

 }
</style>
<body style="background-color: #e6e6ff;">
<div class="wrapper">
      <center> <h2>MDRRMO - Edit Reports</h2></center> 
        <br>
        <div class="form_container">

        <form name="form" action="report_pass" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}



    <div class="form_wrap fullname">

    <div class="form_item">
        <label>Date of Incident</label>
        <input type="date" id="DateIncident" name="DateIncident" value="{{$data[0]->DateOfIncident}}" required>
    </div>

    <div class="form_item">
        <label>Incident Tracking Number</label>
        <input type="text" id="IncidentTrackNum" name="IncidentTrackNum" value="{{$data[0]->Incident_Track_Num}}" disabled>
    </div>


    </div>

            <div class="form_wrap fullname">

    <div class="form_item">
        <label>Name Person/s and Victim/s Involved</label>
        <input type="text" id="NamePersonsInvolved" name="NamePersonsInvolved" value="{{$data[0]->NameOfVictim}}" required> 
    </div>

    <div class="form_item">
        <label>Address</label>
        <input type="text" id="Address" name="Address" value="{{$data[0]->Address}}" required>
    </div>


    </div>

    <div class="form_wrap">
    
    <div class="form_wrap fullname">

    <div class="form_item">
        <label>Age</label>
        <input type="text" id="Age" name="Age" value="{{$data[0]->Age}}" required> 
    </div>


    <div class="form_item">
        <label>Sex</label>
        <!-- <input type="text" id="Sex" name="Sex"> -->
        <select id="Sex" name="Sex" required>
          @if($data[0]->Sex == 'Male')
          <option value="Male" selected>Male</option>
          <option value ="Female">Female</option>
          @else
          <option value ="Male">Male</option>
          <option value ="Female" selected>Female</option>
          @endif
          </select>
    </div>

    <div class="form_wrap select_box">

      <div class="form_item">
        <label>Covid Related</label>
          <select id="Covid" name="Covid" required>
          @if($data[0]->Covid == 'Yes')
          <option value="Yes" selected>Yes</option>
          <option value ="No">No</option>
          @else
          <option value="Yes">Yes</option>
          <option value ="No" selected>No</option>
          @endif
          </select>
      </div>

    <div class="form_item">
        <label>Persons Involved</label>
        <input type="text" id="PersonInvolved" name="PersonInvolved" value="{{$data[0]->Num_Person_Involve}}" required>
    </div>

    </div>
    </div>
    </div>


        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Name of Driver</label>
            <input type="text" id="NameDriver" name="NameDriver" value="{{$data[0]->NameOfDriver}}" required> 
        </div>

        <div class="form_item">
            <label>Vehicle Used</label>
            <input type="text" id="VehicleUsed" name="VehicleUse" value="{{$data[0]->Vehicle_Used}}" required>
        </div>


        </div>

        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Devices Used</label>
            <input type="text" id="DevicesUsed" name="DevicesUsed" value="{{$data[0]->Devices_Used}}" required> 
        </div>

        <div class="form_item">
            <label>Responder Team</label>
            <input type="text" id="ResponderTeam" name="ResponderTeam" value="{{$data[0]->ResponderTeam}}" required>
        </div>
        </div>


        <div class="form_wrap">
        <div class="form_item">
            <label>Name of Responders</label>
            <input type="text" id="NameResponders" name="NameResponders" value="{{$data[0]->NameOfResponders}}" required>
        </div>
        </div>

        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Photo Taken By:</label>
            <input type="text" id="PhotoBy" name="PhotoBy" value="{{$data[0]->Photos_By}}" required> 
        </div>

        <div class="form_item">
            <label>Date Recorded</label>
            <input type="date" id="DateRecorded" name="DateRecorded" value="{{$data[0]->Date_Recorded}}" required>
        </div>
        </div>

            <h1>Incident Details</h1>
<br>
            <div class="form_wrap fullname">

            <div class="form_item">
                <label>Type of Incident</label>
                <select id="TypeIncident" name="TypeIncident" required>
                @if($data[0]->TypeOfIncident == 'Medical Emergency')
                  <option value ="Medical Emergency" selected>Medical Emergency</option>
                  <option value ="Covid">Covid-19</option>
                  <option value ="Dengue">Dengue</option>
                  <option value ="Civil Disturbance">Civil Disturbance</option>
                  <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                @elseif($data[0]->TypeOfIncident == 'Covid-19')
                  <option value ="Medical Emergency" >Medical Emergency</option>
                  <option value ="Covid" selected>Covid-19</option>
                  <option value ="Dengue">Dengue</option>
                  <option value ="Civil Disturbance">Civil Disturbance</option>
                  <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                @elseif($data[0]->TypeOfIncident == 'Dengue')
                  <option value ="Medical Emergency" >Medical Emergency</option>
                  <option value ="Covid" >Covid-19</option>
                  <option value ="Dengue" selected>Dengue</option>
                  <option value ="Civil Disturbance">Civil Disturbance</option>
                  <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                @elseif($data[0]->TypeOfIncident == 'Civil Disturbance')
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

            <div class="form_item">
                <label>Informant Contact Details</label>
                <input type="text" id="InformantContact" name="InformantContact" value="{{$data[0]->Informat_Contact}}" required>
            </div>
            </div>

            <div class="form_wrap fullname">

            <div class="form_item">
                <label>Incident Location</label>
                <input type="text" id="IncidentLocation" name="IncidentLocation" value="{{$data[0]->IncidentLocation}}" required> 
            </div>

            <div class="form_item">
                <label>Time Incident Occured</label>
                <input type="time" id="TimeOccured" name="TimeOccured" value="{{$data[0]->TimeOccured}}" required>
            </div>
            </div>

            <div class="form_wrap fullname">

            <div class="form_item">
                <label>Time Incident Reported</label>
                <input type="time" id="TimeReported" name="TimeReported" value="{{$data[0]->TimeReported}}" required> 
            </div>

            <div class="form_item">
                <label>Time Response Iniated</label>
                <input type="time" id="TimeResponse" name="TimeResponse" value="{{$data[0]->TimeResponse}}" required> 
            </div>

            <div class="form_item">
                <label>Time Response Terminated</label>
                <input type="time" id="TimeResponseTerminated" name="TimeResponseTerminated" value="{{$data[0]->TimeTerminated}}" required>
            </div>
            </div>


            <!-- <div class="form_wrap ">
            <div class="form_item">
                <label>Incident Description/ Action Taken</label>
                <input type="text" style=" height: 100px;" >
            </div>
            </div> -->

            <div class="form_wrap fullname">

            <div class="form_item">
            <label>Incident Description/ Action Taken</label>
                <textarea cols="75" rows="5" id="IncidentDescription" name="IncidentDescription"  required>{{$data[0]->Incident_Des}}</textarea>
            </div>
            </div>
            <div class="form_wrap fullname">
            <div class="form_item">
            <label>Remark</label>
                <textarea cols="75" rows="5" id="Remark" name="Remark"></textarea>
            </div>

            <!-- <div class="form-input">
    <div class="preview">
     <center><img id="file-ip-1-preview"></center> 
    </div>
    <label for="file-ip-1">Upload Image</label>
    <input type="file" name="picture" id="file-ip-1" accept="image/png, image/gif, image/jpeg" onchange="showPreview(event);" required >
    
           </div> -->
            </div>

           <br>

           <div class="form_item">
 
<button  type="button"class="button" id="btncancel" onclick="history.back()" >Cancel</button>
<button  type="submit"class="button" id="right" >Submit</button>
</div>

        </form>
<!-- <div class="form_item">
  <a href="UserDash">
<button  type="button"class="button" id="btncancel" >Cancel</button>
</a>
<button  type="submit"class="button" id="right" >Submit</button>
</div>
          

        </form> -->
        
        </div>
        </div>

        <script type="text/javascript">
  function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
    preview.style.display = "block";
  }
}


</script>
</body>
</html>