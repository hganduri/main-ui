<?php 
 $uname = $_POST['usernamesignup'];
 $pwd = $_POST['passwordsignup'];
 $email = $_POST['emailsignup'];
 
   $server ="localhost";
   $uid="root";
   $p="";
   $dbname="pawn";
   
   mysql_connect($server, $uid, $p); 
   mysql_select_db($dbname);
   
   $sql="insert into users values('$uname','$email','$pwd')";
   $result=mysql_query($sql);
   
   $sql="SELECT * FROM users WHERE username='$uname' and password='$pwd'";
   $result=mysql_query($sql);
   
   $count=mysql_num_rows($result);
    
	if($count==1)
	{
		echo "Data entered";
	}


?>