<?php  
if(isset($_POST["login"])){  
  
if(!empty($_POST['username']) && !empty($_POST['pass'])) {  
    $user=$_POST['username'];  
    $pass=$_POST['pass'];  
  
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('tripdairy_user') or die("cannot select DB");  
  
    $query=mysql_query("SELECT * FROM user WHERE mail='".$user."' AND pwd='".$pass."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysql_fetch_assoc($query))  
    {  
    $dbusername=$row['mail'];  
    $dbpassword=$row['pwd'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: profile.php");
	exit();
    }  
    } else {  
    echo "<script type='text/javascript'>alert('Username or Password is incorrect..!');
	window.location = 'index.php';</script>";
    }  
  
} else {  
    echo "<script type='text/javascript'>alert('All fields are required..!');
	window.location = 'index.php';</script>";
}  
}  
?>  