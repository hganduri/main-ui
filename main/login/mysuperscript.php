<?php 
 $uname = $_POST['username'];
 $pwd = $_POST['password'];
 
   $server ="localhost";
   $uid="root";
   $p="root";
   $dbname="pawn";
   
   mysql_connect($server, $uid, $p); 
   mysql_select_db($dbname);
   
   $sql="SELECT * FROM users WHERE username='$uname' and password='$pwd'";
   $result=mysql_query($sql);
   
   $count=mysql_num_rows($result);
    
	if($count==1)
	{
		 header("Location:dashboard.html"); ;
	}



?>