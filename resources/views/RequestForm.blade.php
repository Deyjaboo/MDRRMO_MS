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
  background:#b30000; 
  /* background:	 #f2f2f2; */
  margin: -30px;
  text-align: center;
  color: white;
  /* color: black; */
  font-size: 19px;
  margin-bottom: 35px;
  padding: 10px;
}

.btn{
  background:#b30000; 
  color:white;
}

</style>
<body>
<div class="wrapper">
 <div class="form_container">

        <form name="form">
                <div class="heading">
                    <h2>Request Form</h2>
                </div>


                <br>

    <div class="container-fluid">
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

           <!-- <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked">
                Certification of:
                </label>
        </div> -->


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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>