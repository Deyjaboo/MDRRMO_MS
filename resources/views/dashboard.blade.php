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
 <!-- Button-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Button-->
 <!-- Modal-->
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- Modal-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/styles.css" rel="stylesheet"> -->
</head>
<style>
    .new{
  margin-left: 30px;
}

ul li {
      list-style: none;
      border-left: 2px solid #3ca0e7;
      display: inline-block;
      position: relative;
      text-decoration: none;
      text-align: center;
   
    }

    li a {
      color: black;

    }

    li a:hover {
      color: #3ca0e7;
    }

    li:hover {
      cursor: pointer;
    }
   

    ul li ul {
      visibility: hidden;
      opacity: 0;
      position: absolute;
      padding-left: 0;
      left: 0;
      display: none;
      background: white;
      margin-left: 30px;
    }

    ul li:hover > ul,
    ul li ul:hover {
      visibility: visible;
      opacity: 1;
      display: block;
      min-width: 100px;
      text-align: left;
      padding-top: 20px;
      box-shadow: 0px 3px 5px -1px #ccc;
    }

    ul li ul li {
      clear: both;
      width: 100%;
      text-align: left;
      margin-bottom: 20px;
      border-style: none;
    }

    @media only screen and (max-width: 768px) {
  /* For mobile phones: */

  .new{
    font-size: 12px;
    width: 100%;
    margin-left: 5px;
}
}
#column1{
    margin-right: 5px;
}
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <img src="images/logo12basd21.png">  
        <br><br>
           

               <!-- Sidebar - Brand -->
               <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img src="images/logo12basd21.png" width="160px" height="160px">  
                </div>
               
            </a> -->

        

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" >
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

                        <!-- <h4>Report and Monitoring Information System</h4> -->
                        <!-- Nav Item - User Information -->
                        <!-- <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <i class='bx bxs-user-circle'></i>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li> -->

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> -->

                    <!-- Content Row -->
                    <div class="row">

                        <!--  Employee -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="dashboard">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            All Reports</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$allreport}}</div>
                                        </div>
                                        <div class="col-auto">
                                        <i class=" fas fa-solid fa-users fa-2x text-gray-300"></i>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- New Reports -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="NewReport">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            New Reports</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$newreport}}</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Reviewed Reports -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="ReviewedReport">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Reviewed Reports
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$reviewedreport}}</div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                           </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <div  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="float: right;"  id="button-modal"> 
                          <i class="fas fa-download fa-sm text-white-50"></i> Add Employee
                    </div> -->

        
                    
                    <h2>MDRRMO - Bulan</h2>
                    <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
                    <canvas id="myChart" style="width:100%;max-width:825px"></canvas>

                    <div class="wrapper">
    <div class="form_container">
                        <div class="card-body">
                                <table id="datatablesSimple" style="width:250%" class="TableData"> 
                                    <thead>
                                        <h5>MDRRMO-Reports</h5>
                                        <br>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Incident Track No.</th>
                                            <th>Date of Incident</th>
                                            <th>Covid Related</th>
                                            <th>Type of Incident</th>
                                            <th>Informant/Contact</th>
                                            <th>Incident Location</th>
                                            <th>Time Incident Occured</th>
                                            <th>Time Incident Reported</th>
                                            <th>Time Response initiated</th>
                                            <th>Time Response Terminated</th>
                                            <th>Incident Description</th>
                                            <th>No. Persons Involved</th>
                                            <th>Name of Person/s Involved</th>
                                            <th>Age</th>
                                            <th>Sex</th>
                                            <th>Address</th>
                                            <th>Vehicle Used</th>
                                            <th>Name of Driver</th>
                                            <th>Team Responder</th>
                                            <th>Name of Responders</th>
                                            <th>Devices Used</th>
                                            <th>Photos Taken By</th>
                                            <th>Report Prepared by</th>
                                            <th>Date Recorded</th>
                                            <th>Remark by Admin</th>
                                            <th>Status</th>
                                            <th  style="width:350%">Processes</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Incident Track No.</th>
                                            <th>Date of Incident</th>
                                            <th>Covid Related</th>
                                            <th>Type of Incident</th>
                                            <th>Informant/Contact</th>
                                            <th>Incident Location</th>
                                            <th>Time Incident Occured</th>
                                            <th>Time Incident Reported</th>
                                            <th>Time Response initiated</th>
                                            <th>Time Response Terminated</th>
                                            <th>Incident Description</th>
                                            <th>No. Persons Involved</th>
                                            <th>Name of Person/s Involved</th>
                                            <th>Age</th>
                                            <th>Sex</th>
                                            <th>Address</th>
                                            <th>Vehicle Used</th>
                                            <th>Name of Driver</th>
                                            <th>Team Responder</th>
                                            <th>Name of Responders</th>
                                            <th>Devices Used</th>
                                            <th>Photos Taken By</th>
                                            <th>Report Prepared by</th>
                                            <th>Date Recorded</th>
                                            <th>Remark by Admin</th>
                                            <th>Status</th>
                                            <th  style="width:350%">Processes</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($data as $data)
                                        <tr> <td>
                                            <img src="images/{{$data->Picture}}" alt="" width="200px" height="180px">
                                        </td>
                                            <td>{{$data->Incident_Track_Num}}</td>
                                            <td>{{$data->DateOfIncident}}</td>
                                            <td>{{$data->Covid}}</td>
                                            <td>{{$data->TypeOfIncident}}</td>
                                            <td>{{$data->Informat_Contact}}</td>
                                            <td>{{$data->IncidentLocation}}</td>
                                            <td>{{$data->TimeOccured}}</td>
                                            <td>{{$data->TimeReported}}</td>
                                            <td>{{$data->TimeResponse}}</td>
                                            <td>{{$data->TimeTerminated}}</td>
                                            <td>{{$data->Incident_Des}}</td>
                                            <td>{{$data->Num_Person_Involve}}</td>
                                            <td>{{$data->NameOfVictim}}</td>
                                            <td>{{$data->Age}}</td>
                                            <td>{{$data->Sex}}</td>
                                            <td>{{$data->Address}}</td>
                                            <td>{{$data->Vehicle_Used}}</td>
                                            <td>{{$data->NameOfDriver}}</td>
                                            <td>{{$data->ResponderTeam}}</td>
                                            <td>{{$data->NameOfResponders}}</td>
                                            <td>{{$data->Devices_Used}}</td>
                                            <td>{{$data->Photos_By}}</td>
                                            <td>{{$data->ReportedBy}}</td>
                                            <td>{{$data->Date_Recorded}}</td>
                                            <td>{{$data->Remark}}</td>
                                            <td>{{$data->Status}}</td>
                                      
                                            
                                            <td>
                                                <!-- <button type="button" class="btn btn-primary"><i class='bx bx-edit-alt'></i></button>
                                                <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button> -->
                                                <div class="row">
                                                    <div class="column" id="column1">
                                                        <a href="javascript:void(0)" class="btn btn-success" id="editbtn"><i class="bx bx-edit-alt" data-toggle="tooltip" title="Edit"></i></a>
                                                    </div>
                                                    <div class="column" id="column1">
                                                        <a href="javascript:void(0)" class="btn btn-primary" id="editbtn"><i class='bx bx-info-circle' data-toggle="tooltip" title="View"></i></a>
                                                    </div>
                                                   
                                                   
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

    </section>
<!-- Modal start -->
<div id="EditMe" class="modal fade">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Student Details</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="editstudent" method="post" enctype="multipart/form-data" id="editForm">
      {{ csrf_field() }}
      <div class="modal-body">
					<!-- <div class="modal-body">
						<p>Are you sure you want to Delete this record?</p>
					</div> -->
            <div class="form_wrap fullname">
                <div class="form_item">
                    <label>Student ID<span class="text-danger"></span></label>
                    <input type="text" name="StudentId" id="EditStudentId" class="form-control" placeholder="Student ID" required>
                </div>

                <div class="form_item">
                    <label>First Name<span class="text-danger"></span></label>
                    <input type="text" name="FirstName" id="EditFirstName"  class="form-control" placeholder="Enter First Name" required>
                </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                <div class="form_item">
                    <label>Last Name<span class="text-danger"></span></label>
                    <input type="text" name="LastName" id="EditLastName" class="form-control" placeholder="Enter Last Name" required>
                </div>
                <div class="form_item">
                    <label>MiddleName<span class="text-danger"></span></label>
                    <input type="text" name="EditMiddleName" id="EditMiddleName" class="form-control" placeholder="Enter Middle Name">
                </div>
                </div>

                <br>
                <div class="form_wrap fullname">
                    <div class="form_item">
                    <label>Suffix<span class="text-danger"></span></label>
                    <input type="text"  name="EditSuffix" id="EditSuffix" class="form-control" placeholder="Suffix">
                    </div>
                    <div class="form_item">
                    <label>Mobile Number<span class="text-danger"></span></label>
                    <input type="text"  name="EditMobileNumber" id="EditMobileNumber" class="form-control" placeholder="+639......" required>
                    </div>
                </div>

                <br>
                <div class="form_wrap fullname">

                    <div class="form_item">
                    <label>Course<span class="text-danger"></span></label>
                    <select class="form-control col-12" name="EditCourse" id="EditCourse" required>
                        <option value="" selected="selected" disabled="disabled">Course</option>
                        <option value="BSIT">BSIT</option>
                        <option value="BSEED">BSEED</option>
                    </select>
                    </div>

                    <div class="form_item">
                    <label>Year<span class="text-danger"></span></label>
                    <select class="form-control col-12" name="EditYear" id="EditYear" required>
                        <option value="" selected="selected" disabled="disabled">Year</option>
                        <option value="1st">1st</option>
                        <option value="2nd">2nd</option>
                        <option value="3rd">3rd</option>
                        <option value="4th">4th</option>
                    </select>
                    </div>
            </div>


      </div>
      <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Edit">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal end -->
<script>
     // Edit
     $(document).ready(function(){

        $('.TableData').on('click', '#editbtn', function(){
        $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function(){
                return $(this).text();
            }).get();
            $('#EditStudentId').val(data[1]);
            $('#EditFirstName').val(data[2]);
            $('#EditLastName').val(data[4]);
            $('#EditMiddleName').val(data[3]);
            $('#EditSuffix').val(data[5]);
            $('#EditCourse').val(data[6]);
            $('#EditYear').val(data[7]);
            $('#EditMobileNumber').val(data[8]);
            // $('#delete_modal_Form').attr('action', 'assets-delete/'+data[0]);
            $('#editForm').attr('action', 'EditStudent/'+data[0]);
            $('#EditMe').modal('show');
        });
});
</script>
       

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

<script>
    var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["Medical Emergency", "Covid-19", "Dengue", "Civil Disturbance", "Vehicular/Pedestrian Accident",],
    datasets: [{
      label: 'Number of Occurence',
      data: [{{$medical}}, {{$covid}}, {{$dengue}}, {{$civil}}, {{$vehicular}}],
      backgroundColor: "rgb(0, 0, 153)"
    }, {
      label: 'Persons Involved',
      data: [{{$med}}, {{$cov}}, {{$deng}}, {{$civ}}, {{$veh}}],
      backgroundColor: "rgb(77, 77, 255)"
    }]
  }
});
</script>
    



    <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>