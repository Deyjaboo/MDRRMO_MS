<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Request Form</title>
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,500;1,400&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-size: 80.5%;
    font-family: 'Roboto', sans-serif;
}

li {
    list-style: none;
}

a {
    text-decoration: none;
}


.header{
    border-bottom: 1px solid #E2E8F0;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1.5rem;
    background-color: white;
}

.hamburger {
    display: none;
}

.bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    background-color: #101010;
}

.nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nav-item {
    margin-left: 5rem;
}

.nav-link{
    font-size: 1.6rem;
    font-weight: 400;
    color: #b30000;
}

.nav-link:hover{
    color: #482ff7;
}

.nav-logo {
    font-size: 2.1rem;
    font-weight: 500;
    color:#b30000;
}

@media only screen and (max-width: 768px) {
    .nav-menu {
        position: fixed;
        left: -100%;
        top: 5rem;
        flex-direction: column;
        background-color: #fff;
        width: 100%;
        border-radius: 10px;
        text-align: center;
        transition: 0.3s;
        box-shadow:
            0 10px 27px rgba(0, 0, 0, 0.05);
    }

    .nav-menu.active {
        left: 0;
    }

    .nav-item {
        margin: 2.5rem 0;
    }

    .hamburger {
        display: block;
        cursor: pointer;
    }

}

.hamburger.active .bar:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
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
  max-width: 620px;
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

.heading{
  /* background:#b30000;  */
  background:	 #f2f2f2; 
  margin: -30px;
  text-align: center;
  /* color: white; */
   color: #b30000; 
  font-size: 19px;
  margin-bottom: 5px;
  padding: 10px;
}

.btn{
  background:#b30000; 
  color:white;
}

.dat{
        /* width: 150px;  */
  /* margin-left: 300px; */
  text-align: right;
}

/* @media screen and (max-width: 600px) {
 .dat{
  margin-left: -300px;
} 
} */
ul {
  margin: 0px;
  padding: 0px;
  /* background: #e3e3e3; */
  list-style-type: none;
  position: relative;
}

/* ul li {
  display: inline-block;
} */

ul li a {
  padding: 15px;
  color: #292929;
  text-decoration: none;
  display: block;
}

/* ul li:hover {
  background: lightgrey;
} */

ul ul {
  position: absolute;
  min-width: auto;
  background: lightgrey;
  display: none;
}

ul ul li {
  display: block;
  background: #e3e3e3;
}

ul li:hover ul {
  display: block;
}

@media (max-width:600px) {
  ul {
    display: none;
    position: static;
    background: #e3e3e3;
  }
  ul li {
    display: block;
  }
  ul ul {
    position: static;
    background: #e3e3e3;
  }

  ul li:hover ul {
  display: block;
}

ul li a {
  padding: 15px;
  color: #292929;
  text-decoration: none;
  display: block;
}
}
</style>
<body>

<header class="header">
        <nav class="navbar">
        <img src="images/logo.png" width="60" height="70"> 
            <!-- <a href="#" class="nav-logo">R.G.de Castro Colleges</a> -->
            <ul class="nav-menu">
               
                <li class="nav-item">


                <form method="POST" action="{{ route('logout') }}">
                            @csrf

                      
                    <li class="nav-link">
                    <a href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="nav-link">Hi, James</span>
                    </a>
                     </li>
                     
                </form>

                    <ul>
                   
                </ul>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>



<div class="wrapper">
 <div class="form_container">

        <form name="form">
                <div class="heading">
                  <!-- <img src="images/logo.png" width="60" height="80"> -->
                    <h4 >R.G. de Castro Colleges</h4>
                    <h6 >Bulan Sorsogon</h6>
                </div>

       <br>         

    <div class="container-fluid"> 
    <center> <h3 >Request Form</h3></center>
    <div class="dat">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date">
        </div> 

    <p>May I Request for:</p>

        <div class="row">

        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                Honorable Dismissal
                </label>
         </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Transcript of Record
                </label>
        </div>
        </div>

        <div class="row">

        <div class="col-md-6 p-6">
        <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Special Order
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                 Form 137
                </label>
        </div>
        </div>


        
        <div class="row">

        <div class="col-md-6 p-6">
        <div class="form-check">
                 <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Diploma
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                 <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                 Good Moral Character
                </label>
        </div>
        </div>
<br>
        <p>Certification of:</p>




        <div class="row">
        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Unit Earned
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                General Weighted Average
                </label>
        </div>
        </div>

        <div class="row">
        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Graduation
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Grades
                </label>
        </div>
        </div>

        <br>
        <p>Authentication:</p>

        <div class="container-fluid">

        <div class="row">
        <div class="col-md-4 p-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Transcript
                </label>
        </div>

        <div class="col-md-4 p-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Special Order
                </label>
        </div>

        <div class="col-md-4 p-4">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Diploma
                </label>
        </div>
        </div>
        </div>

        <p>Purpose:</p>
        <div class="row">
        <div class="col-md-6 p-6">
        <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                For Enrolment
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                For Employment
                </label>
        </div>
        </div>

        <div class="col-md-6 p-6">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                For Licensure Examination
                </label>
        </div>

        <br>
        <div class="d-grid gap-2">
      <button class="btn btn-success" type="button">Submit</button>
    </div>

    </div>
  </form>
 </div>
</div>


<script>
        const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>


</html>