<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Employee</title>

    <!-- Custom fonts for this template-->

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
    <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/styles.css" rel="stylesheet"> -->
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <img src="images/logo.png">  
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
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="Employee">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        All Employee</div>
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
                        Active Employee</div>
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
                        <a href="InactiveEmployee">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Inactive Employee
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

<div  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="float: right;"  id="button-modal"> 
                          <i class="fas fa-download fa-sm text-white-50"></i> Add Employee
                    </div>


<h2>Manage Employee</h2>

<div class="wrapper">
<div class="form_container">
    <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <h5>MDRRMO-Employee</h5>
                    <br>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Sakura Yamamoto</td>
                        <td>Zone 8, Bulan Sorsogon</td>
                        <td>09123456789</td>
                        <td>sample@gmail.com</td>
                        <td>sample123</td>
                        <td>Active</td>
                    </tr>

                </tbody>
            </table>

</section>
      

    



  <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>