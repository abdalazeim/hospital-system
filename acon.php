<?php
$localhost="localhost";
$database_conn = "abd";
$db_user="root";
$db_password="1234";
$db="abd";
 require_once('Connections/conn.php'); 
$connect= mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db);

$mon=$_POST['mon'];
$sda=$_POST['sda'];
$sme=$_POST['sme'];
$sye=$_POST['sye'];

$mysql="INSERT INTO acon(mon,sda,sme,sye) VALUES('$mon','$sda','$sme','$sye') ";
if ($_POST['submit'])
{
$query=mysql_query($mysql);
}











?>