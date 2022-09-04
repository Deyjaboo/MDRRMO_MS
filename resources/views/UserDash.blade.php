<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{('css/styles.css') }}" rel="stylesheet" type="text/css" >
  <title>Report</title>
</head>

<style>





.wrapper{
  max-width: 100%;
  width: 80%;
  padding-top: 100px;
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
  position: fixed;
  height: var(--navbar-height);
  background-color: #0000b3;
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
}

.home-link,
.navbar-link {
  color: var(--navbar-text-color);
  text-decoration: none;
  display: flex;
  font-weight: 400;
  align-items: center;
}

.home-link:is(:focus, :hover) {
  color: var(--navbar-text-color-focus);
}

.navbar-link {
  justify-content: center;
  width: 100%;
  padding: 0.4em 0.8em;
  border-radius: 5px;
}

.navbar-link:is(:focus, :hover) {
  color: var(--navbar-text-color-focus);
  background-color:#0000ff;
}
.navbar-logo {
  background-color: var(--navbar-text-color-focus);

  border-radius: 50%;
  width: 30px;
  height: 30px;
  margin-right: 0.5em;
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
  background-color: #0000b3;
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
    <a href="/"  class="home-link">
      
      <div class="navbar-logo"></div>
      MDRRMO-Bulan
    </a>
    <button type="button" id="navbar-toggle" aria-controls="navbar-menu" aria-label="Toggle menu" aria-expanded="false">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <div id="navbar-menu" aria-labelledby="navbar-toggle">
      <ul class="navbar-links">
        
        <li class="navbar-item"><a class="navbar-link" href="/contact">Request</a></li>
  
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
<center>



<div class="wrapper">

 <div class="form_container">
   <form name="form">
    <div class="heading">
    <!-- <img src="images/logo1.jpg" style="width:908px;height:200px;"> -->
    <!-- <img src="images/logo1.jpg"> -->
  </div> 
  <br>
  <div  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" style="float: right;"  id="button-modal"> 
                          <i class="fas fa-download fa-sm text-white-50"></i> Add Reports
                    </div>

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



</div>


  </form>
 </div>
</div>
</center>




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
</script>



<script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>  <!-- gride line table-->
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>