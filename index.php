<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>tripdairy.com | Subscription Plan</title>
		<link rel="icon" href="favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Subscription plans for chatbot" />
		
		<!--Bootstrap css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		
		<!--Bootstrap jquery-->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<!--CSS-->
		<link rel="stylesheet" href="css/style.css?v=1.5">
		
	</head>
	<body>
		<!--Nav-bar-->
		<div class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand col-md-1" href="index.php" ><img src="image/logo.png" alt="tripdairy-logo"/></a>
			<form class="form-inline ml-md-auto my-2 my-lg-0" method="POST" action="login.php">
			  <input type="mail" class="form-control mr-sm-2" name="username" placeholder="Username">
			  <input type="password" class="form-control mr-sm-2" name="pass" placeholder="Password">
			  <!--button class="btn my-2 my-sm-0" type="submit">Login</button-->
			  <input type="submit" value="Login" name="login" class="btns"/>
			</form>
		</div>
		<div class="main">
		<div class="row" style="margin-right:0px">
		<div class="about col-md-8">
			<h2><span class="upper">Your Personal Travel Assistant</span></h2>
			<span class="abt-txt">Tripdairy manages all the hassles with travel for you as your personal travel concierge. We understand you, your preferences and needs to help you get things done proactively on demand.</span>
		</div>
		<div class="register col-md-4">
			<div class="reg-txt"><span class="reg-title">Register</span><h5>If you don't have an account</h5></div>
			<form method="POST" action="register.php">
				<div class="inpt"><input type="text" name="uname" placeholder="Name" class="form-control"/><br/>
				<input type="email" name="mail" placeholder="Mail-Id" class="form-control"/><br/>
				<input type="password" name="pwd" placeholder="Password" class="form-control"/><br/>
				<input type="password" name="cpwd" placeholder="Confirm Password" class="form-control"/><br/></div>
				<div id="form-row"><input type="cancel" value="Cancel" name="cancel" class="btns"/>
				<!--button type="submit" id="register" style="margin-left:100px">Register</button-->
				<input type="submit" class="btns" value="Register" name="submit" style="margin-left:100px"/></div>
			</form>
		</div>
		</div></div>
	</body>
</html>