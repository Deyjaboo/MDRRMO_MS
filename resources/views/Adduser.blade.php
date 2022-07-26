<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Add User</title>
</head>
<style>
    .home .add{
    font-size: 20px;
    font-weight: 500;
    color: var(--text-color);
    padding: 12px 60px;
}

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  font-family: sans-serif;
}

body{
  height: 100vh;
  background: #e1edf9;
}

.wrapper{
  max-width: 650px;
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

.form_item input[type="text"],
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


.btn input[type="submit"]{
  background: #b30000;
  border: 1px solid #1598d4;
  padding: 10px;
  width: 100%;
  font-size: 16px;
  letter-spacing: 1px;
  border-radius: 3px;
  cursor: pointer;
  color: #fff;
}
</style>
<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="images/logo.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">RGCC</span>
                    <span class="profession">Request System</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">


                <ul class="menu-links">
                    <li class="nav-link">
                    <a href="sampledash"method="GET">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        
                        </a>
                    </li>

                    <li class="nav-link">
                    <a href="Adduser"method="GET">

                            <i class='bx bx-user-plus icon'></i>
                            <span class="text nav-text">Add User</span>
                        </a>
                    </li>

                    <li class="nav-link">
                    <a href="Transaction"method="GET">
                        <i class='bx bx-transfer-alt icon'></i>
                            <span class="text nav-text">Transaction</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="#">
                        <i class='bx bxs-comment-add icon'></i>
                            <span class="text nav-text">Feedback</span>
                        </a>
                    </li> -->

                    <li class="nav-link">
                   
                    <a href="#">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
               </ul>
            </div>

           
        </div>

    </nav>

    <section class="home">
        <div class="text">Online Document Request System</div>
        <div class="add">Add User</div>

        <div class="wrapper">
 <div class="form_container">
   <form name="form">


   <div class="form_wrap fullname">

<div class="form_item">
<label>Student ID<span class="text-danger">*</span></label>
 <input type="text"  class="form-control" placeholder="Student ID">
</div>


<div class="form_item">
<label>First Name<span class="text-danger">*</span></label>
<input type="text"  class="form-control" placeholder="Enter First Name">
</div>
</div>



<div class="form_wrap fullname">

<div class="form_item">
<label>Last Name<span class="text-danger">*</span></label>
  <input type="text"  class="form-control" placeholder="Enter Last Name">
</div>


<div class="form_item">
<label>Middle Name<span class="text-danger">*</span></label>
<input type="text"  class="form-control" placeholder="Enter Middle Name">
</div>
</div>



<div class="form_wrap fullname">

<div class="form_item">
<label>Suffix<span class="text-danger">*</span></label>
<input type="text"  class="form-control" placeholder="Suffix">
</div>


<div class="form_item">
<label>Course<span class="text-danger">*</span></label>
                        <select class="form-control col-12">
                            <option value="" selected="selected" disabled="disabled">Course</option>
                            <option value="ACTIVE">BSIT</option>
                            <option value="INACTIVE">BSEED</option>
                        </select>      
</div>
</div>


<div class="form_wrap fullname">

<div class="form_item">
<label>User Name<span class="text-danger">*</span></label>
<input type="text"  class="form-control" placeholder="User Name">
</div>


<div class="form_item">
<label>Password<span class="text-danger">*</span></label>
<input type="text"  class="form-control" placeholder="Password">
</div>
</div>


<div class="btn">
    <input type="submit" value="Submit">
 </div>

  </form>
 </div>
</div>


    </section>




    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      searchBtn = body.querySelector(".search-box"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})

searchBtn.addEventListener("click" , () =>{
    sidebar.classList.remove("close");
})


    </script>

</body>
</html>
