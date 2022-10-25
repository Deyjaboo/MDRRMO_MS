<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Employee</title>
<!-- Modal-->
   

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
                        <a href="Adduser">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        All Employee</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$num}}</div>
                    </div>
                    <div class="col-auto">
                    <i class=" fas fa-solid fa-users fa-2x text-gray-300"></i>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Active Employee -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <a href="ActiveEmployee">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Active Employee</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$active}}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-file fa-2x text-gray-300"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Inactive Employee -->
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
                                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$inactive}}</div>
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

<div  class="d-none d-sm-inline-block  shadow-sm" style="float: right;"  id="button-modal"> 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-download fa-sm text-white-50"></i> Add Employee</button>       
</div>


<h2>Manage Employee</h2>
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
                    <h5>MDRRMO-Employee</h5>
                    <br>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>User Name</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Contact No.</th>
                        <th>User Name</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->address}}</td>
                        <td>{{$data->contact_num}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->Status}}</td>
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