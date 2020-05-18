<?php
$localhost="localhost";
$database_conn = "abd";
$db_user="root";
$db_password="1234";
$db="abd";
 require_once('Connections/conn.php'); 
$connect= mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db);

$num=$_POST['num'];
$date=$_POST['date'];
$name=$_POST['name'];

$mysql="INSERT INTO sp(num,date,name) VALUES('$num','$date','$name') ";
if ($_POST['submit'])
{
$query=mysql_query($mysql);
}











?>