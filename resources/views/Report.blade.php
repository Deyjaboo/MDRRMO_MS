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


</style>

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
        <form name="form">



<div class="form_wrap fullname">

<div class="form_item">
    <label>Date</label>
    <input type="date"> 
</div>

<div class="form_item">
    <label>Incident Tracking Number</label>
    <input type="text">
</div>


</div>

        <div class="form_wrap fullname">

<div class="form_item">
    <label>Person/s amd Victim/s Involved</label>
    <input type="text"> 
</div>

<div class="form_item">
    <label>Address</label>
    <input type="text">
</div>


</div>

<div class="form_wrap">
 
<div class="form_wrap fullname">

<div class="form_item">
    <label>Age</label>
    <input type="text"> 
</div>


<div class="form_item">
    <label>Sex</label>
    <input type="text">
</div>

<div class="form_wrap select_box">

  <div class="form_item">
    <label>Covid Related</label>
       <select name="Covid">
       <option></option>
	  <option>Yes</option>
	  <option>No</option>
	 
       </select>
  </div>

<div class="form_item">
    <label>Persons Involved</label>
    <input type="text">
</div>

</div>
</div>
</div>


        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Vehicle Driver</label>
            <input type="text"> 
        </div>

        <div class="form_item">
            <label>Vehicle Used</label>
            <input type="text">
        </div>


        </div>

        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Devices Used</label>
            <input type="text"> 
        </div>

        <div class="form_item">
            <label>Responder Team</label>
            <input type="text">
        </div>
        </div>


        <div class="form_wrap">
        <div class="form_item">
            <label>Name of Responders</label>
            <input type="text">
        </div>
        </div>

        <div class="form_wrap fullname">

        <div class="form_item">
            <label>Photo Taken By:</label>
            <input type="text"> 
        </div>

        <div class="form_item">
            <label>Date Recorded</label>
            <input type="date">
        </div>
        </div>

            <h1>Incident Details</h1>
<br>
            <div class="form_wrap fullname">

            <div class="form_item">
                <label>Type of Incident</label>
                <input type="text"> 
            </div>

            <div class="form_item">
                <label>Informant Contact Details</label>
                <input type="text">
            </div>
            </div>

            <div class="form_wrap fullname">

            <div class="form_item">
                <label>Incident Location</label>
                <input type="text"> 
            </div>

            <div class="form_item">
                <label>Time Incident Occured</label>
                <input type="time">
            </div>
            </div>

            <div class="form_wrap fullname">

            <div class="form_item">
                <label>Time Incident Reported</label>
                <input type="time"> 
            </div>

            <div class="form_item">
                <label>Time Response Terminated</label>
                <input type="time">
            </div>
            </div>


            <div class="form_wrap ">
            <div class="form_item">
                <label>Incident Description/ Action Taken</label>
                <input type="text" style=" height: 100px;" >
            </div>
            </div>

    
            <!-- <div class="btn">
          <button type="submit" onclick="alert('Data Successfull Submit!')">Submit!</button>
        </div> -->
       <button type="button" class="btn btn-primary">Submit</button>
        </form>
        
        </div>
        </div>



    <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>