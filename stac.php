<?php
$localhost="localhost";
$database_conn = "abd";
$db_user="root";
$db_password="1234";
$db="abd";
 require_once('Connections/conn.php'); 
$connect= mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db);

$name=$_POST['name'];
$nums=$_POST['nums'];
$tys=$_POST['tys'];

$mysql="INSERT INTO stac(name,nums,tys) VALUES('$name','$nums','$tys') ";
if ($_POST['submit'])
{
$query=mysql_query($mysql);
}











?>