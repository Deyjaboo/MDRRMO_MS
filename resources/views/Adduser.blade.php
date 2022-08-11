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

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
   
    <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="css/styles.css" rel="stylesheet"> -->
</head>

<style>
    .home .add{
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

/* *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: sans-serif;
} */

body{
  height: 100vh;
  background: #e1edf9;

}

.wrapper{
  max-width: 650px;
  width: 100%;
  margin: 30px auto 0;
  padding: 10px;
  border-radius: 50px;
}

.wrapper .form_container{
  background:  #f2f2f2;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 3px;
  border-radius: 50px;
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
.form_wrap.fullname .form_item,
.form_wrap #Fname{
  width: 100%;
  padding-left: 10px;
}

.form_wrap.fullname .form_item:first-child,
.form_wrap.select_box .form_item:first-child{
  margin-right: 4%;
}

.wrapper .form_container .form_item label{
  display: block;
  margin-bottom: 5px;
}

.form_item input[type="text"],input[type="password"],
.form_item select{
  width: 100%;
  /* padding: 10px; */
  font-size: 16px;
  border: 1px solid #dadce0;
  border-radius: 3px;
}

.form_item input[type="text"],[type="password"]:focus{
  border-color: #6271f0;
}
.text-danger{
  color: #FF0000;
}


.btn input[type="submit"]{
  background-color:  #4d4dff;;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width: 100%;
  border-radius: 10px;
  }
  .btn input[type="submit"]:hover{
  background-color:  #6666ff;
}
  /* background: #0000b3;
  border: 1px solid #1598d4;
  padding: 10px;  
  width: 100%;

  font-size: 16px;
  letter-spacing: 1px;
  border-radius: 3px;
  cursor: pointer;
  color: #fff; */
}

@media only screen and (max-width: 768px) {
  /* For mobile phones: */
  .btn {
    width: 100%;
  }
  .imgg{
    width: 100%;
  }
  .new{
    font-size: 12px;
    width: 100%;
    margin-left: -150px;
}
}

@media only screen and (min-width: 1200px) {
  .btn {
    width: 100%;
  }
  .imgg{
    width: 100%;
  }
}

.h4{

  font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

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
      /* font-family: arvo; */
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
.heading{
  background:  #4d4dff;;
  margin: -30px;
  text-align: center;
  color: white;
  font-size: 19px;
  margin-bottom: 35px;
  padding: 10px;
  border-radius: 50px;
  
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
                    <span>Add Employee</span>
                    
                </a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link collapsed" href="Report">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Reports</span>
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

                        <h5>Report and Monitoring Information System</h5>
                    </ul>

                </nav>
                <div class="wrapper">
    <div class="form_container">
    <div class="heading">
     <h2>Add Employee</h2>
  </div>
    <!-- <img class="imgg" src="images/logo1.jpg" width="560" height="130"> -->

  <!-- <form action="user_reg" method="post" enctype="multipart/form-data"> -->
  <form method="POST" action="{{ route('register') }}"> 
            @csrf
<div class="form_wrap fullname">
    <div class="form_item ">
      <label>Full Name<span class="text-danger"></span></label>
      <input type="text" name="Fname" id="Fname"  class="form-control" placeholder="Enter Full Name" required>
    </div>
</div>


<div class="form_wrap fullname">
  <div class="form_item">
    <label>Address<span class="text-danger"></span></label>
    <input type="text" name="Lname" id="Lname" class="form-control" placeholder="Enter Address" required>
  </div>
  <div class="form_item">
    <label>Contact No.<span class="text-danger"></span></label>
    <input type="text" name="Mname" id="Mname" class="form-control" placeholder="Enter Contact">
  </div>

</div>

<div class="form_wrap fullname">
    <div class="form_item">
      <label>User Name<span class="text-danger"></span></label>
      <input type="text" name="stud_id" id="stud_id" class="form-control" placeholder="User Name">
    </div>

    <div class="form_item">
      <label>Password<span class="text-danger"></span></label>
      <input type="password"  name="password" id="password" class="form-control" placeholder="Enter Password">
    </div>
</div>


<center>
  <div class="btn">
    <input type="submit" value="Submit">
     <!-- <button type="submit">Submit</button> -->
  </div>
  </center>   

    



   
</body>

</html>