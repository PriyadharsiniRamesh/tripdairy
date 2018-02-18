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
		<div class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand col-md-1" href="index.php" ><img src="image/logo.png" alt="tripdairy-logo"/></a>
			<form class="form-inline ml-md-auto my-2 my-lg-0" method="POST" action="">
			<input type="submit" value="Logout" name="logout" class="btns"/>
			</form>
			<?php 
				if(isset($_POST['logout'])){
					session_start();
				session_destroy();
				header("Location:index.html");
				}
			?>
		</div>
		
		<div class="sub-plan">
			<img src="image/user_icon.png" alt="user-profile" /><br/>
			<span>Current plan</span><br><br>
			<?php
			if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
				die(mysql_error());
			  if( !mysql_select_db( 'tripdairy_user' ) )
				die(mysql_error());
			session_start();
			$user = $_SESSION['sess_user'];
			//$plan = $_SESSION['ses_plan'];
			date_default_timezone_set('Asia/Kolkata');
			$etime = date('Y-m-d h:i:s', strtotime('+1 year'));
			$stime = date ('Y-m-d h:i:s', time());
			$selectSQL= "SELECT * FROM user WHERE user.mail='".$user."' ";   
			  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
				echo mysql_error();
			  }
			  else{
				?>
			<table>
			  <thead>
				<tr>
				  <th>Name</th>
				  <th>Email</th>
				  <th>Plan</th>
				  <th>Start-date</th>
				  <th>End-date</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
				  if( mysql_num_rows( $selectRes )==0 ){
					echo '<tr><td colspan="4">No Rows Returned</td></tr>';
				  }else{
					while( $row = mysql_fetch_assoc( $selectRes ) ){
						if($row['start_time']<=$row['end_time'])
							{
							echo "<tr><td>{$row['name']}</td><td>{$row['mail']}</td><td>{$row['plan']}</td><td>{$row['start_time']}</td><td>{$row['end_time']}</td></tr>\n";
							$plan=$row['plan'];
							}
						else if($stime>$row['end_time'])
						{echo "<script type='text/javascript'>alert('Your plan has expired..Renew it..!');
						window.location = 'plans.php';</script>";}
					}
				  }
				?>
			  </tbody>
			</table>
			 <?php
			  }
			?>
			<!--/div>
			<!--div class="plan-form"-->
			<form method="POST" action="">
				<div id="form-row">
				<input type="submit" value="Plans" name="plans" class="btns"/>
			</form>
			<?php 
				if(isset($_POST['confirm'])){
					$con=mysql_connect('localhost','root','') or die(mysql_error());  
					mysql_select_db('tripdairy_user') or die("cannot select DB");  
					$sql="UPDATE user SET plan='$plan',start_time=NOW(),end_time='$etime' WHERE mail='$user'";  
					$result=mysql_query($sql);  
						if($result)
						{  
						echo "Success";
						}
						else {echo "Some error has occured";}
				}
				if(isset($_POST['plans'])){
				header("Location:plans.php");
				}
			?>
			</div>
	</body>
</html>