<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['mail']) && !empty($_POST['pwd']) && !empty($_POST['uname']) && !empty($_POST['cpwd'])) {  
    $mail=$_POST['mail'];  
    $pwd=$_POST['pwd'];  
	$name=$_POST['uname'];
	$cpwd=$_POST['cpwd'];
	
    $con=mysql_connect('localhost','root','') or die(mysql_error());  
    mysql_select_db('tripdairy_user') or die("cannot select DB");  
    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,15}$/', $pwd)) {
    echo "<script type='text/javascript'>alert('Password must contain:1 letter; 1 symbol; 1 number; 8-15characters');
	window.location = 'index.php';</script>";
    }
    $query=mysql_query("SELECT * FROM user WHERE mail='".$mail."'");  
    $numrows=mysql_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO user(name,mail,pwd) VALUES('$name','$mail','$pwd')";  
  
    $result=mysql_query($sql);  
        if($result){  
	echo "<script type='text/javascript'>alert('Registeration Successful..!');
	window.location = 'index.php';</script>";
    } else {  
    echo "<script type='text/javascript'>alert('Some error has occured');
	window.location = 'index.php';</script>"; 
    }  
    }	
	else {  
    echo "<script type='text/javascript'>alert('Username already exists. Try with new one..!');
	window.location = 'index.php';</script>";
    }  
  
	}
	else {
		echo "<script type='text/javascript'>alert('All fields are required..!');
	window.location = 'index.php';</script>";
	}
	
}    
?> 