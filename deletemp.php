<?php
 require_once('Connections/conn.php');

 ?>
 
<?php
mysql_select_db($database_conn, $conn);
$query_stud = "SELECT id, employ, num, city,date FROM employe";
$stud = mysql_query($query_stud, $conn) or die(mysql_error());
$row_stud = mysql_fetch_assoc($stud);
$totalRows_stud = mysql_num_rows($stud);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 

"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>  استرجاع البيانات من قاعدة البيانات </title>
</head>

<body bgcolor= "ffcddb">
<center>
<table width="200" border="1">
  <tr>
    <th scope="col">اسم الموظف </th>
    <th scope="col">رقم الموظف </th>
    <th scope="col">المدينه </th>
	<th scope="col">تاريخ التعيين </th>
    <th colspan="2" scope="col">الاجراء</th>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_stud['employ']; ?></td>
      <td><?php echo $row_stud['num']; ?></td>
      <td><?php echo $row_stud['city']; ?></td>
	  <td><?php echo $row_stud['date']; ?></td>
      <td><a href="delemp.php?d=<?php echo $row_stud['id']; ?>">الحذف</a></td>
      
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
