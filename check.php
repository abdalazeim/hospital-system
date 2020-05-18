<?php

session_start();
class mysql  {

private $localhost="localhost";
private $db_user="root";
private $db_password="1234";
private $db_name="abd";
function __construct()  {
mysql_connect($this->localhost,$this->db_user,$this->db_password) ;
mysql_select_db($this->db_name);

}

 
function sql()
{     $username=$_POST['username'];

     $password=$_POST['password'];
	 $sql= " SELECT * FROM user WHERE username='$username' AND password='$password'";
	 $query=mysql_query($sql);
	 $num=mysql_num_rows($query);
	 
	 if($num==1)  {
	 
	 

	 
	    $_SESSION['username']="username";
	    $_SESSION['password']="password";         
       header("location:admin.php");
      }

else    {

echo"erorr";
}



}



}


$use=new mysql;
$use->sql();








?>