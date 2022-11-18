<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Managed Employee</title>
<!-- Modal-->
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- Button-->
 <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Button-->
    <!-- Custom fonts for this template-->

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
    <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/styles.css" rel="stylesheet"> -->
    <link rel="shortcut icon" href="images/logo12basd21.png"/>
    
</head>

<style>
    #boxcolor1{
        background-color: #ffffff;
    }

    #boxcolor2{
        background-color:  #33cccc;
    }

    #boxcolor3{
        background-color:  #ff6666;
    }

    .btn0 {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 10px 14px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 8px;
}

.btn1 {
  background-color:#00cccc;
  border: none;
  color: white;
  padding: 10px 14px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 8px;
}

.btn2 {
  background-color:#009900;
  border: none;
  color: white;
  padding: 10px 14px;
  font-size: 16px;
  cursor: pointer;
  border-radius: 8px;
}

.btn0:hover {
    background-color: #0039e6;
    box-shadow: 0 14px 28px rgba(0,0,0,0.20), 0 8px 8px rgba(0,0,0,0.12);
}

.btn0:active {
  background-color:#0039e6;
  box-shadow: 0 1px 2px rgba(0,0,0,0.6), 0 1px 2px rgba(0,0,0,0.12);
  transition: all 0.3s cubic-bezier(.20,.8,.20,1);
}

.btn1:hover {
    background-color:  #1affff;
    box-shadow: 0 14px 28px rgba(0,0,0,0.20), 0 8px 8px rgba(0,0,0,0.12);
}

.btn1:active {
  background-color:  #1affff;
  box-shadow: 0 1px 2px rgba(0,0,0,0.6), 0 1px 2px rgba(0,0,0,0.12);
  transition: all 0.3s cubic-bezier(.20,.8,.20,1);
}


.btn2:hover {
    background-color:  #00b300;
    box-shadow: 0 14px 28px rgba(0,0,0,0.20), 0 8px 8px rgba(0,0,0,0.12);
}

.btn2:active {
  background-color:  #00b300;
  box-shadow: 0 1px 2px rgba(0,0,0,0.6), 0 1px 2px rgba(0,0,0,0.12);
  transition: all 0.3s cubic-bezier(.20,.8,.20,1);
}


#place,#month,#year{
    width: 50%;
  padding: 8px 8px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color:#f2f2f2;
  border-radius: 5px;
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
                <a class="nav-link collapsed" href="Report">
                    <i class="fas fa-clipboard-list"></i>
                    <span> Add Reports</span>
                    </a>
              </li> 

              <li class="nav-item">
                <a class="nav-link collapsed" href="Export" >
                <i class="fas fa-solid fa-file-export"></i>
                <span>Export Data</span> 
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

                        <!-- <h5>Report and Monitoring Information System</h5> -->
                    </ul>

                </nav>

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
    <div class="col-xl-4 col-md-6 mb-4" >
  <label for="cars">Choose a month:</label>
  <select name="month" id="month">
    <option value=""></option disabled>
    <option value="January">January</option>
    <option value="February">February</option>
    <option value="March">March</option>
    <option value="April">April</option>
    <option value="May">May</option>
    <option value="June">June</option>
    <option value="July">July</option>
    <option value="August">August</option>
    <option value="September">September</option>
    <option value="October">October</option>
    <option value="November">November</option>
    <option value="December">December</option>
   
    
  </select>
  <br><br>
    </div>   

    <!-- Active Employee -->
    <div class="col-xl-4 col-md-6 mb-4">
    <label for="cars">Choose a year:</label>
  <select name="year" id="year">
    <option value=""></option disabled>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
    <option value="2024">2024</option>
    <option value="2025">2025</option>
    <option value="2026">2026</option>
  </select>
    </div>


    <div class="col-xl-4 col-md-6 mb-4">
    <button class="btn0"><i class="fa fa-search"></i></button>
    <button class="btn1"><i class="fa fa-refresh"></i></button>
    <button class="btn2"><i class="fa fa-file-export"></i></button>
    </div>
   
</div>

<!-- <div  class="d-none d-sm-inline-block  shadow-sm" style="float: right;"  id="button-modal"> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-download fa-sm text-white-50"></i> Add Employee</button>       
</div> -->

@if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
<div class="wrapper">
<div class="form_container">
    <div class="card-body">
    <table id="datatablesSimple">
                                    <thead>
                                        <center><h5>MDRRMO-Reports</h5></center>
                                 
                                        <tr>
                                            <th>Picture</th>
                                            <th>Incident Track No.</th>
                                            <th>Date of Incident</th>
                                            <th>Type of Incident</th>
                                            <th>Report Prepared by</th>
                                            <th>Status</th>
                                            <th  style="width:350%">View_Details</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Incident Track No.</th>
                                            <th>Date of Incident</th>
                                            <th>Type of Incident</th>
                                            <th>Report Prepared by</th>
                                            <th>Status</th>
                                            <th  style="width:350%">View_Details</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($data as $data)
                                        <tr> <td>
                                            <img src="images/{{$data->Picture}}" alt="" width="200px" height="180px">
                                        </td>
                                        <td>{{$data->Incident_Track_Num}}</td>
                                            <td>{{$data->DateOfIncident}}</td>
                                            <td>{{$data->TypeOfIncident}}</td>
                                            <td>{{$data->ReportedBy}}</td>
                                            <td>{{$data->Status}}</td>
                                            <td>
                                               
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ViewReportModal{{$data->id}}"><i class='bx bx-info-circle'></i></button>
                                                <!-- <a class="btn btn-primary" data-toggle="modal" data-target="#ViewReportModal{{$data->id}}"><i class='bx bx-info-circle' data-toggle="tooltip" title="View"></i></a> -->
                                                @include('modal.ViewReport')
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
               

</section>

<!-- Large modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" action="{{ route('register') }}"> 
        @csrf
  <div class="modal-body">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Contact Number</label>
      <input type="text" class="form-control"  name="contact_num" id="contact_num" placeholder="" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="text" class="form-control" name="email" id="email" placeholder="" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="" required>
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </form>  
    </div>
  </div>
</div>
<!-- Large modal -->



  <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>