<?php 
 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);

$Delete_Staff_id=$_GET['Delete'];
$Delete_Query="DELETE FROM staff
				WHERE emp_id='$Delete_Staff_id' "
;

$Execute=mysql_query($Delete_Query);
if($Execute){
	echo '<script>window.open("staff_view.php?Deleted=Record Deleted successfully","_self")</script> ';
}

 ?>