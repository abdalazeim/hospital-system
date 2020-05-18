<?php
$localhost="localhost";
$database_conn = "abd";
$db_user="root";
$db_password="1234";
$db="abd";
 require_once('Connections/conn.php'); 
$connect= mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db);

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

$mysql="INSERT INTO user(username,password,email) VALUES('$username','$password','$email') ";
if ($_POST['submit'])
{
$query=mysql_query($mysql);
}











?>