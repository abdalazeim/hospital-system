<?php
$localhost="localhost";
$database_conn = "abd";
$db_user="root";
$db_password="1234";
$db="abd";
 require_once('Connections/conn.php'); 
$connect= mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db);

$employ=$_POST['employ'];
$num=$_POST['num'];
$city=$_POST['city'];
$date=$_POST['date'];

$mysql="INSERT INTO employe(employ,num,city,date) VALUES('$employ','$num','$city','$date') ";
if ($_POST['submit'])
{
$query=mysql_query($mysql);
}











?>