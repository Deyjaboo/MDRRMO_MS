<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="css/main.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <title>Login Form Using HTML And CSS Only</title>
       
    </head>
    <body>



   <center> <img class="logo" src="images/logo.png"></center>
	<div class="container" id="container">
		<div class="form-container log-in-container">

		<form method="POST" action="{{ route('login') }}">
        @csrf
       <p><b><i>Welcome To Online Document Request system</i></b></p>
			<x-auth-session-status class="mb-4" :status="session('status')" />
			<x-auth-validation-errors class="mb-4" :errors="$errors" id="error" />
				<input id="email" name="email"  type="text" placeholder="Username" required autofocus/>
				<input id="password" name="password" type="password" placeholder="Password" required/>
				<button type="submit">Log In</button>
		</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<center><h1>R.G. de Castro Colleges</h1></center>
                    <p>_____________________________</p>
					<h3>Online Document Request System</h3>
				</div>
			</div>
		</div>
	</div>
    </body>

	<style>
		#error{
			color: red;
		}
	</style>
</html>
