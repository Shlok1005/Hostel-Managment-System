<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Mess View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<caption><h2>My Mess Record</h2></caption>
	<table class="table table-hover">
		
		<tr>
			<th>Roll Number</th>			
			<th>FEES</th>			
			<th>Hostel ID</th>			
			<th>Date</th>			
					

		</tr>
 
<?php 
$variable = $_SESSION["Name"] ;
 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * 
            FROM mess
            Where rollno = '$variable'" ;
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Roll_Number=$DataRows['rollno'];
	$Fees=$DataRows['fees'];
	$Hostel_id=$DataRows['hostel_id'];
	$Date=$DataRows['date'];

 ?>
 <tr>
<td><?php echo $Roll_Number ;?></td>
<td><?php echo $Fees; ?></td>
<td><?php echo $Hostel_id; ?></td>
<td><?php echo $Date; ?></td>

</tr>

<?php } ?>

	

	</table>


</body>
</html>