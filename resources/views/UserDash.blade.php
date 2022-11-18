<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
  <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
  <link rel="shortcut icon" href="images/logo12basd21.png"/>
  <title>User</title>
</head>

<style>

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 20px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}



/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 25%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}


.wrapper{
  max-width: 100%;
  width: 80%;

  /* padding-top: 180px; */
  height: 100%;
}

.wrapper .form_containers{
 height: 400px;
  background: white;
  padding: 30px;
  box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.15);
  border-radius: 10px;
}
    :root {
  --navbar-bg-color: hsl(0, 0%, 15%);
  --navbar-text-color: hsl(0, 0%, 85%);
  --navbar-text-color-focus: white;
  --navbar-bg-contrast: hsl(0, 0%, 25%);
}
* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}
body {
  height: 100vh;
  font-family: Arial, Helvetica, sans-serif;
  line-height: 1.6;
}
.container {
  max-width: 1000px;
  padding-left: 1.4rem;
  padding-right: 1.4rem;
  margin-left: auto;
  margin-right: auto;
}
#navbar {
  --navbar-height: 64px;
  position: block;
  height: var(--navbar-height);
  background-color: #3333ff;
  left: 0;
  right: 0;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15);
  
}
.navbar-container {
  display: flex;
  justify-content: space-between;
  height: 100%;
  align-items: center;
 
}
.navbar-item {
  margin: 0.4em;
  width: 100%;
  font-size: 20px;
  color:white;
  
}

.home-link,
.navbar-link {
  color: var(--navbar-text-color);
  text-decoration: none;
  display: flex;
  font-weight: 100;
  align-items: center;
}

.home-link:is(:focus, :hover) {
  color: var(--navbar-text-color-focus);
}

.navbar-link {
  justify-content: center;
  width: 120%;
  padding: 0.4em 0.8em;
  border-radius: 5px;
  font-size: 18px;
  color:white;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar-link:is(:focus, :hover) {
  color: var(--navbar-text-color-focus);
  background-color:#0000ff;
  
}
.navbar-logo {
  border-radius: 50%;
  width: 10px;
  height: 30px;
  margin-right: 0.5em;
 color:white;
}
#navbar-toggle {
  cursor: pointer;
  border: none;
  background-color: transparent;
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
.icon-bar {
  display: block;
  width: 25px;
  height: 4px;
  margin: 2px;
  background-color: var(--navbar-text-color);
}
#navbar-toggle:is(:focus, :hover) .icon-bar {
  background-color: var(--navbar-text-color-focus);
}
#navbar-toggle[aria-expanded="true"] .icon-bar:is(:first-child, :last-child) {
  position: absolute;
  margin: 0;
  width: 30px;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:first-child {
  transform: rotate(45deg);
}
#navbar-toggle[aria-expanded="true"] .icon-bar:nth-child(2) {
  opacity: 0;
}
#navbar-toggle[aria-expanded="true"] .icon-bar:last-child {
  transform: rotate(-45deg);
}
#navbar-menu {
  position: fixed;
  top: var(--navbar-height);
  bottom: 0;
  opacity: 0;
  visibility: hidden;
  left: 0;
  right: 0;
}
#navbar-toggle[aria-expanded="true"] + #navbar-menu {
  background-color: rgba(0, 0, 0, 0.4);
  opacity: 1;
  visibility: visible;
}
.navbar-links {
  list-style: none;
  position: absolute;
  /* background-color: #0000b3; */
  background-color: #3333ff;
  display: flex;
  flex-direction: column;
  align-items: center;
  left: 0;
  right: 0;
  margin: 1.4rem;
  border-radius: 5px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
}

#navbar-toggle[aria-expanded="true"] + #navbar-menu .navbar-links {
  padding: 1em;
}
@media screen and (min-width: 700px) {
  #navbar-toggle,
  #navbar-toggle[aria-expanded="true"] {
    display: none;
  }

  #navbar-menu,
  #navbar-toggle[aria-expanded="true"] #navbar-menu {
    visibility: visible;
    opacity: 1;
    position: static;
    display: block;
    height: 100%;
  }

  .navbar-links,
  #navbar-toggle[aria-expanded="true"] #navbar-menu .navbar-links {
    margin: 0;
    padding: 0;
    box-shadow: none;
    position: static;
    flex-direction: row;
    width: 100%;
    height: 100%;
  }
  
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

@media only screen and (max-width: 768px) {
  /* For mobile phones: */

  .navbar-link {
  justify-content: center;
  width: 100%;
  padding: 0.4em 0.8em;
  border-radius: 5px;
  font-size: 18px;
  color:white;
}

}

/* .heading{
  background-image: url("images/logo1.jpg");s
  margin: -30px;
  text-align: center;
  color: white;
  margin-bottom: 35px;
  padding: 10px;
height: 150px;
} */

.nav-link{
  color:white;
}



</style>
<body>
  
<!-- 
<body  style="background-image: url('images/logo1.jpg');">
   -->
 <header id="navbar">
  <nav class="navbar-container container">
    <a href="" img src="images/logo12basd21.png"  class="home-link">
<img src="images/logo12basd21.png" width="70px" height="70px">
      <div  class="navbar-item">MDRRMO-Bulan</div>
  
    </a>
    <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div id="navbar-menu" aria-labelledby="navbar-toggle">
      <ul class="navbar-links">
        
        <li class="navbar-item"><a class="navbar-link" href="addreport"> Add Report</a></li>
  
                    <li class="navbar-item">
                    <form class="navbar-link" action="{{ route('logout') }}" method="POST">
                                @csrf
                    <a  class="nav-link collapsed"  href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">   
                    <span>Logout</span> 
                    </a>
                    </form>
                    </li>
      

      </ul>
    </div>
  </nav>
 
</header> 
<br>
<div class="container">
  <div class="mySlides">
    <img src="images/cover.jpg" style="width:100%;height:300px;">
  </div>

  <div class="mySlides">
    <img src="images/pic1.jpg" style="width:100%;height:300px;">
  </div>

  <div class="mySlides">
    <img src="images/pic2.jpg" style="width:100%;height:300px;">
  </div>
    
  <div class="mySlides">
    <img src="images/pic3.jpg" style="width:100%;height:300px;">
  </div>

  
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/cover.jpg" style="width:100%;height:100px;" onclick="currentSlide(1)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/pic1.jpg" style="width:100%;height:100px;" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/pic2.jpg" style="width:100%;height:100px;" onclick="currentSlide(3)" >
    </div>
    <div class="column">
      <img class="demo cursor" src="images/pic3.jpg" style="width:100%;height:100px;" onclick="currentSlide(4)" >
    </div>
   
  </div>
</div>



<div class="wrapper">
 <div class="form_container">
   <form name="form">
    <div class="heading">

  </div> 
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
                                            <th  style="width:350%">Edit/View_Details</th>
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
                                            <th  style="width:350%">Edit/View_Details</th>
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
                                                <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#EditReportModal{{$data->id}}"><i class='bx bx-edit-alt'></i></button>
                                                @include('modal.EditReport')
                                                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#ViewReportModal{{$data->id}}"><i class='bx bx-info-circle'></i></button>
                                                <!-- <a class="btn btn-primary" data-toggle="modal" data-target="#ViewReportModal{{$data->id}}"><i class='bx bx-info-circle' data-toggle="tooltip" title="View"></i></a> -->
                                                @include('modal.ViewReport')
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>



</div>


  </form>
 </div>
</div>





<script>
  const navbarToggle = navbar.querySelector("#navbar-toggle");
const navbarMenu = document.querySelector("#navbar-menu");
const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";

const toggleNavbarVisibility = () => {
  isNavbarExpanded = !isNavbarExpanded;
  navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
};

navbarToggle.addEventListener("click", toggleNavbarVisibility);

navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
navbarMenu.addEventListener("click", toggleNavbarVisibility);



let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>



<script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>