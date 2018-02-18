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
		<link rel="stylesheet" href="css/style.css?v=1.2">
	</head>
	<body>
		<div class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand col-md-1" href="index.php" ><img src="image/logo.png" alt="tripdairy-logo"/></a>
			<a class="user-logo ml-md-auto" href="profile.php"><img src="image/user_icon.png" alt="user-profile" /></a>
		</div>
		<div class="wrapper">
				<!-- PRICING-TABLE CONTAINER -->
				<div class="pricing-table group">
					<h1 class="heading">
						Subscription plans
					</h1>
					<!-- PERSONAL -->
					<div class="block personal fl">
						<h2 class="title">Basic</h2>
						<!-- CONTENT -->
						<div class="content">
							<p class="price">
								<sup>Rs.</sup>
								<span>500</span>
								<sub>/year</sub>
							</p>
							<p class="hint">Perfect for freelancers</p>
						</div>
						<!-- /CONTENT -->
						<!-- FEATURES -->
						<ul class="features">
							<li><span class="fontawesome-cog"></span>1 Chatbot</li>
							<li><span class="fontawesome-star"></span>1,000 Unique users</li>
							<li><span class="fontawesome-dashboard"></span>3-4 days Support</li>
						</ul>
						<!-- /FEATURES -->
						<!-- PT-FOOTER -->
						<div class="pt-footer">
							<form method="POST" action="plans.php"><input type="submit" value="Subscribe" name="subs1" /></form>
							<?php
								session_start();  
								$user = $_SESSION['sess_user'];
								$_SESSION['ses_plan']='Basic';
								$_SESSION['ses_user']=$user;
								if(isset($_POST['subs1'])){
									header("Location:new_plan.php");
									exit();
								}								
							?>
						</div>
						<!-- /PT-FOOTER -->
					</div>
					<!-- /PERSONAL -->
					<!-- PROFESSIONAL -->
					<div class="block professional fl">
						<h2 class="title">Premium</h2>
						<!-- CONTENT -->
						<div class="content">
							<p class="price">
								<sup>Rs.</sup>
								<span>2,500</span>
								<sub>/year</sub>
							</p>
							<p class="hint">Suitable for startups</p>
						</div>
						<!-- /CONTENT -->
						<!-- FEATURES -->
						<ul class="features">
							<li><span class="fontawesome-cog"></span>5 Chatbot</li>
							<li><span class="fontawesome-star"></span>5,000 Unique users</li>
							<li><span class="fontawesome-dashboard"></span>24/7 Support</li>
						</ul>
						<!-- /FEATURES -->
						<!-- PT-FOOTER -->
						<div class="pt-footer">
							<form method="POST" action=""><input type="submit" value="Subscribe" name="subs2" /></form>
							<?php
								if(isset($_POST['subs2'])){
									$_SESSION['ses_plan']='Premium';
											header("Location:new_plan.php");
											exit();
								}								
							?>
						</div>
						<!-- /PT-FOOTER -->
					</div>
					<!-- /PROFESSIONAL -->
					<!-- BUSINESS -->
					<div class="block business fl">
						<h2 class="title">Business</h2>
						<!-- CONTENT -->
						<div class="content">
							<p class="price">
								<sup>Rs.</sup>
								<span>5,000</span>
								<sub>/year</sub>
							</p>
							<p class="hint">For established business</p>
						</div>
						<!-- /CONTENT -->

						<!-- FEATURES -->
						<ul class="features">
							<li><span class="fontawesome-cog"></span>100 Chatbot</li>
							<li><span class="fontawesome-star"></span>50,000 Unique users</li>
							<li><span class="fontawesome-dashboard"></span>24/7 Support</li>
						</ul>
						<!-- /FEATURES -->

						<!-- PT-FOOTER -->
						<div class="pt-footer">
							<form method="POST" action=""><input type="submit" value="Subscribe" name="subs3" /></form>
							<?php
								if(isset($_POST['subs3'])){
									$_SESSION['ses_plan']='Business';
									header("Location:new_plan.php");
									exit();
								}								
							?>
						</div>
						<!-- /PT-FOOTER -->
					</div>
					<!-- /BUSINESS -->
				</div>
				<!-- /PRICING-TABLE -->
		</div>
	</body>
</html>