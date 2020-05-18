<?php require_once('Connections/conn.php'); ?>
<?php
if(isset($_POST['submit'])){
                      $mon  =   $_POST['mon'];
                      $sda=    $_POST['sda'];
                      $sme = $_POST['sme'];
					  $sye= $_POST['sye'];
                     



  $updateSQL = "UPDATE acon SET mon='$mon',sda='$sda', sme='$sme',sye='$sye' WHERE id=".$_GET['u']."";
                     

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

 
  header("Location: slecacon.php");


}
mysql_select_db($database_conn, $conn);
$query_stud = "SELECT * FROM acon WHERE id = ".$_GET['u']."";
$stud = mysql_query($query_stud, $conn) or die(mysql_error());
$row_stud = mysql_fetch_assoc($stud);
$totalRows_stud = mysql_num_rows($stud);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head  dir="rtl">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تحديث البيانات</title>
</head>

<body dir="rtl"  bgcolor= "ffcddb">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td  align="right">رقم الايصال</td>
      <td><input type="text" name="mon" value="<?php echo htmlentities($row_stud['mon'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">التاريخ</td>
      <td><input type="text" name="sda" value="<?php echo htmlentities($row_stud['sda'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">المبلغ</td>
      <td><input type="text" name="sme" value="<?php echo htmlentities($row_stud['sme'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>valign="baseline">
      <td nowrap="nowrap" align="right">نوع الايصال</td>
      <td><input type="text" name="sye" value="<?php echo htmlentities($row_stud['sye'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
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
