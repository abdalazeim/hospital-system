﻿<?php require_once('Connections/conn.php'); ?>
<?php


if ((isset($_GET['d'])) && ($_GET['d'] != "")) {
  $deleteSQL = "DELETE FROM stac WHERE id=".$_GET['d']."";                        
  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($deleteSQL, $conn) or die(mysql_error());

  $deleteGoTo = "selectstac.php";
 
  
  header("Location:select.php?m="."تم الحذف بنجاح");
}
?>
