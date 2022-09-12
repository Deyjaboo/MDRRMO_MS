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

</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <img src="images/logo.png">  
        <br><br>
           

               <!-- Sidebar - Brand -->
               <!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                <img src="images/logo.png" width="160px" height="160px">  
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
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
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
                                            <a href="ActiveEmployee">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            New Reports</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">30</div>
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
                                            <a href="InactiveEmploye">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Reviewed Reports
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50</div>
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

                    <canvas id="myChart" style="width:100%;max-width:825px"></canvas>

                    <div class="wrapper">
    <div class="form_container">
                        <div class="card-body">
                                <table id="datatablesSimple" style="width:300%">
                                    <thead>
                                        <h5>MDRRMO-Reports</h5>
                                        <br>
                                        <tr>
                                            <th>Incident Track No.</th>
                                            <th>Date</th>
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
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Incident Track No.</th>
                                            <th>Date</th>
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
                                            <th>Edit/Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>R-2022-001</td>
                                            <td>January 2, 2022</td>
                                            <td>No</td>
                                            <td>Medical Emergency</td>
                                            <td>427 Base (BFP)</td>
                                            <td>Calomagon P.A. Base</td>
                                            <td>3:55</td>
                                            <td>4:00</td>
                                            <td>4:30</td>
                                            <td>4:39</td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, fugiat, accusamus tempora veritatis quas provident nam sint quasi eos aut dolorum. Sunt molestiae sed asperiores aut reprehenderit porro vitae? Sapiente?</td>
                                            <td>1</td>
                                            <td>Ligaya Gajo</td>
                                            <td>29</td>
                                            <td>Female</td>
                                            <td>Calomagon, P.A. Base</td>
                                            <td>Commuter Ambulance</td>
                                            <td>Harry Gliponeo</td>
                                            <td>Team Charlie</td>
                                            <td>Micco Gimena, Harry Gliponeo, Rey Bernales</td>
                                            <td>Stretcher, Gloves-6,Facemask-4, Go bag</td>
                                            <td></td>
                                            <td>Micco M. Gimena</td>
                                            <td>January 22, 2022</td>
                                            <td>
                                                <button type="button" class="btn btn-primary"><i class='bx bx-edit-alt'></i></button>
                                                <button type="button" class="btn btn-danger"><i class='bx bx-trash'></i></button>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

    </section>


       

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
      data: [7, 2, 1, 1, 18],
      backgroundColor: "rgb(0, 0, 153)"
    }, {
      label: 'Persons Involved',
      data: [8, 4, 2, 1, 34],
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