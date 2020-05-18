<?php
$localhost="localhost";
$database_conn = "abd";
$db_user="root";
$db_password="1234";
$db="abd";
 require_once('Connections/conn.php'); 
$connect= mysql_connect($localhost,$db_user,$db_password);
mysql_select_db($db);

$namee=$_POST['namee'];
$nume=$_POST['nume'];
$adde=$_POST['adde'];
$datee=$_POST['datee'];

$mysql="INSERT INTO amel(namee,nume,adde,datee) VALUES('$namee','$nume','$adde','datee') ";
if ($_POST['submit'])
{
$query=mysql_query($mysql);
}











?>