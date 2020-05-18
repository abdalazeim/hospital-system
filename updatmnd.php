<?php require_once('Connections/conn.php'); ?>
<?php
if(isset($_POST['submit'])){
                      $prud  =   $_POST['prud'];
                      $nup=    $_POST['nup'];
                      $nus = $_POST['nus'];
					  $scri = $_POST['scri'];
                     



  $updateSQL = "UPDATE pro SET prud='$prud',nup='$nup', nus='$nus',scri='$scri' WHERE id=".$_GET['u']."";
                     

  mysql_select_db($database_conn, $conn);
  $Result1 = mysql_query($updateSQL, $conn) or die(mysql_error());

 
  header("Location: selctmnd.php");


}
mysql_select_db($database_conn, $conn);
$query_stud = "SELECT * FROM pro WHERE id = ".$_GET['u']."";
$stud = mysql_query($query_stud, $conn) or die(mysql_error());
$row_stud = mysql_fetch_assoc($stud);
$totalRows_stud = mysql_num_rows($stud);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head  dir="rtl">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>تعديل بيانات الايراد</title>
</head>

<body dir="rtl"  bgcolor= "ffcddb">
<form action="<?php echo $editFormAction; ?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td  align="right">المبلغ</td>
      <td><input type="text" name="prud" value="<?php echo htmlentities($row_stud['prud'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">رقم الايراد</td>
      <td><input type="text" name="nup" value="<?php echo htmlentities($row_stud['nup'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">نوع الايراد</td>
      <td><input type="text" name="nus" value="<?php echo htmlentities($row_stud['nus'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>valign="baseline">
      <td nowrap="nowrap" align="right">تاريخ الايراد</td>
      <td><input type="text" name="scri" value="<?php echo htmlentities($row_stud['scri'], ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>valign="baseline">
    <tr valign="baseline">
      
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
