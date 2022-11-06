<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Dashboard</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
    <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/styles.css" rel="stylesheet"> -->
</head>
<style>
.wrapper{
  max-width: 950px;
  width: 100%;
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
#IncidentDescription{
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

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <img src="images/logo12basd21.png">  
        <br><br>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="dashboard" >
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

           

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Add Employee -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="Adduser" >
                    <i class=" fas fa-solid fa-users"></i>
                    <span>Manage Employee</span>
                    
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link collapsed" href="Report" >
                <i class="fas fa-clipboard-list"></i>
                <span>Add Reports</span>
                    
                </a>
            </li>


              
            <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a  class="nav-link collapsed"  href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                         <i class="fas fa-sign-out-alt"></i>     
                    <span>Logout</span> 
                    </a>
                    </form>
            </li>

    




        </ul>
        <!-- End of Sidebar -->
<!-- ..................................................................... -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-blue topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class='bx bx-menu'></i>
                    </button>
                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                    </ul>

                </nav>
                    


        <div class="wrapper">
        <h2>MDRRMO - Add Reports</h2>
        <br>
        <div class="form_container">
    <form name="form" action="report_pass" method="post" enctype="multipart/form-data">
       {{ csrf_field() }}



    <div class="form_wrap fullname">

    <div class="form_item">
        <label>Date of Incident</label>
        <input type="date" id="DateIncident" name="DateIncident" required> 
    </div>

    <div class="form_item">
        <label>Incident Tracking Number</label>
        <input type="text" id="IncidentTrackNum" name="IncidentTrackNum" required>
    </div>


    </div>

            <div class="form_wrap fullname">

    <div class="form_item">
        <label>Name Person/s and Victim/s Involved</label>
        <input type="text" id="NamePersonsInvolved" name="NamePersonsInvolved" required> 
    </div>

    <div class="form_item">
        <label>Address</label>
        <input type="text" id="Address" name="Address" required>
    </div>


    </div>

    <div class="form_wrap">
    
    <div class="form_wrap fullname">

    <div class="form_item">
        <label>Age</label>
        <input type="text" id="Age" name="Age" required> 
    </div>


    <div class="form_item">
        <label>Sex</label>
        <!-- <input type="text" id="Sex" name="Sex"> -->
        <select id="Sex" name="Sex" required>
          <option value="" selected="selected" disabled="disabled"></option>
          <option value ="Male">Male</option>
          <option value ="Female">Female</option>
          </select>
    </div>

    <div class="form_wrap select_box">

      <div class="form_item">
        <label>Covid Related</label>
          <select id="Covid" name="Covid" required>
          <option></option>
          <option value ="Yes">Yes</option>
          <option value ="No">No</option>
          </select>
      </div>

    <div class="form_item">
        <label>Persons Involved</label>
        <input type="text" id="PersonInvolved" name="PersonInvolved" required>
    </div>

    </div>
    </div>
    </div>


        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Name of Driver</label>
            <input type="text" id="NameDriver" name="NameDriver" required> 
        </div>

        <div class="form_item">
            <label>Vehicle Used</label>
            <input type="text" id="VehicleUsed" name="VehicleUsed" required>
        </div>


        </div>

        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Devices Used</label>
            <input type="text" id="DevicesUsed" name="DevicesUsed" required> 
        </div>

        <div class="form_item">
            <label>Responder Team</label>
            <input type="text" id="ResponderTeam" name="ResponderTeam" required>
        </div>
        </div>


        <div class="form_wrap">
        <div class="form_item">
            <label>Name of Responders</label>
            <input type="text" id="NameResponders" name="NameResponders" required>
        </div>
        </div>

        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Photo Taken By:</label>
            <input type="text" id="PhotoBy" name="PhotoBy" required> 
        </div>

        <div class="form_item">
            <label>Date Recorded</label>
            <input type="date" id="DateRecorded" name="DateRecorded" required>
        </div>
        </div>

            <h1>Incident Details</h1>
<br>

<div class="form_item">
                <label>Type of Incident</label>
                <!-- <input type="text" id="TypeIncident" name="TypeIncident">  -->
                <select id="TypeIncident" name="TypeIncident" required>
                  <option value="" selected="selected" disabled="disabled"></option>
                  <option value ="Medical Emergency">Medical Emergency</option>
                  <option value ="Covid-19">Covid-19</option>
                  <option value ="Dengue">Dengue</option>
                  <option value ="Civil Disturbance">Civil Disturbance</option>
                  <option value ="Vehicular/Pedestrian Accident">Vehicular/Pedestrian Accident</option>
                </select>
            </div>

            <div class="form_wrap fullname">

            <div class="form_item">
            <label>Informant Contact Details</label>
                <input type="text" id="InformantContact" name="InformantContact" required>
            </div>

            <div class="form_item">
                 <label>Incident Location</label>
                <input type="text" id="IncidentLocation" name="IncidentLocation" required> 
            </div>
            </div>

            <div class="form_wrap fullname">

            <div class="form_item">
            <label>Time Incident Occured</label>
                <input type="time" id="TimeOccured" name="TimeOccured" required>
            </div>

            <div class="form_item">
            <label>Time Incident Reported</label>
                <input type="time" id="TimeReported" name="TimeReported" required> 
            </div>

            </div>

          

            <div class="form_wrap fullname">

            <div class="form_item">
            <label>Time Response Iniated</label>
                <input type="time" id="TimeResponse" name="TimeResponse" required> 
            </div>

            <div class="form_item">
                <label>Time Response Terminated</label>
                <input type="time" id="TimeResponseTerminated" name="TimeResponseTerminated" required>
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
              <textarea cols="30" rows="10" id="IncidentDescription" name="IncidentDescription" required></textarea>
                  <!-- <input type="textarea" style="height: 100px;" id="IncidentDescription" name="IncidentDescription" required> -->
            </div>



            

            <div class="form-input">
        <div class="preview">
      <center><img id="file-ip-1-preview"></center>  
        </div>
        <label for="file-ip-1">Upload Image</label>
        <input type="file" name="picture" id="file-ip-1" accept="image/png, image/gif, image/jpeg" onchange="showPreview(event);" required>
           </div>
            </div>

           <br>

        <div class="form_item">
        <button  type="submit" class="button" id="right">Submit</button>
        </div>
         <br><br>  
 
        </div>
        </div>

        </form>
        
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
    <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>