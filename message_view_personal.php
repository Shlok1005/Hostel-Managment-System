<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Notifications</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<caption><h2>Notifications</h2></caption>
	<table class="table table-hover">
		
		<tr>
			<th>Roll Number</th>			
			<th>Date</th>			
			<th>Message</th>
			<th>From</th>
			<th>Delete</th>


		</tr>
 
<?php 
$variable = $_SESSION["Name"] ;
 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * FROM message
             Where rollno = '$variable' AND student_view = 1 " ;
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Roll_Number=$DataRows['rollno'];
	$Date=$DataRows['date1'];
	$Message=$DataRows['message'];
	$From=$DataRows['from1'];
	

 ?>
 <tr>
<td><?php echo $Roll_Number ;?></td>
<td><?php echo $Date; ?></td>
<td><?php echo $Message; ?></td>
<td><?php echo $From; ?></td>
<td><a href="Message_Delete_student.php?Delete=<?php echo $Roll_Number; ?>"> Delete</a></td>


</tr>

<?php } ?>

	

	</table>


</body>
</html>