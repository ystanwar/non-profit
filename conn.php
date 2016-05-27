<?php
session_start();

$username="root";	
$password="";	


	
$hostname="localhost"; 

@mysql_connect($hostname,$username,$password) or die("MySQL Error: " . mysql_error());


$selected = @mysql_select_db("14bce138") or die("database is not available"); 

$Username=@mysql_real_escape_string($_POST['username']); 
$Password=@mysql_real_escape_string($_POST['password']); 

$res=@mysql_query("SELECT username,password FROM  login WHERE username='$Username' && password='$Password'"); 
$rows=@mysql_num_rows($res);
$data=@mysql_fetch_array($res);
if(!empty($res))
{
	if($data['username']==$Username && $data['password']==$Password)
	{
	
	echo "Successfully logged in"; 
	header('Location:/Option.html'); // write the path to your registration page.
	
	}
	else
	{
		echo "Userid or Password is incorrect"; 

	}
}
else
{
	echo"Please enter the required fields"; 

}



?>