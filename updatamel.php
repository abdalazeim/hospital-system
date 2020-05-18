<?php require_once('Connections/conn.php'); ?>
<?php
if(isset($_POST['submit'])){
                      $namee  =   $_POST['namee'];
                      $nume=    $_POST['nume'];
                      $adde = $_POST['adde'];
					  $datee = $_POST['datee'];
                     



  $updateSQL = "UPDATE amel SET namee='$namee',nume='$nume', adde='$adde',datee='$datee' WHERE id=".$_GET['u']."";
                     

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

 
  header("Location: selctamel.php");


}
mysql_select_db($database_conn, $conn);
$query_stud = "SELECT * FROM amel WHERE id = ".$_GET['u']."";
$stud = mysql_query($query_stud, $conn) or die(mysql_error());
$row_stud = mysql_fetch_assoc($stud);
$totalRows_stud = mysql_num_rows($stud);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head  dir="rtl">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعديل بيانات المريض</title>
</head>

<body dir="rtl"  bgcolor= "ffcddb">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td  align="right">اسم المريض</td>
      <td><input type="text" name="namee" value="<?php echo htmlentities($row_stud['namee'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">رقم المريض</td>
      <td><input type="text" name="nume" value="<?php echo htmlentities($row_stud['nume'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">نوع المرض</td>
      <td><input type="text" name="adde" value="<?php echo htmlentities($row_stud['adde'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>valign="baseline">
      <td nowrap="nowrap" align="right">تاريخ اجراء الفحص</td>
      <td><input type="text" name="datee" value="<?php echo htmlentities($row_stud['datee'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>valign="baseline">
    <tr> valign="baseline">
      
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="تعديل " name="submit"/></td>
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="id" value="<?php echo $row_stud['id']; ?>" />
</form>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($stud);
?>
