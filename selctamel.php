﻿<?php require_once('Connections/conn.php'); ?>
<?php
mysql_select_db($database_conn, $conn);
$query_stud = "SELECT id, namee, nume, adde,datee FROM amel";
$stud = mysql_query($query_stud, $conn) or die(mysql_error());
$row_stud = mysql_fetch_assoc($stud);
$totalRows_stud = mysql_num_rows($stud);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  استرجاع البيانات من قاعدة البيانات </title>
</head>

<body bgcolor= "ffcddb">
<center>
<table width="200" border="1">
  <tr>
    <th scope="col">اسم المريض</th>
    <th scope="col">رقم المريض</th>
    <th scope="col">نوع المرض</th>
	<th scope="col">تاريخ اجراء الفحص</th>
    <th colspan="2" scope="col">الاجراء</th>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_stud['namee']; ?></td>
      <td><?php echo $row_stud['nume']; ?></td>
      <td><?php echo $row_stud['adde']; ?></td>
	  <td><?php echo $row_stud['datee']; ?></td>
     
      <td><a href="updatamel.php?u=<?php echo $row_stud['id']; ?>">التعديل</a></td>
    </tr>
    <?php } while ($row_stud = mysql_fetch_assoc($stud)); ?>
</table>

</center>

</body>
</html>
<?php
if ((isset($_GET['m'])) && ($_GET['m'] != "")) {echo $_GET['m'];}
mysql_free_result($stud);
?>
