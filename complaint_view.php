<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Complaint Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="complaint_view.php" method="GET">
	</div>

</form>

<br><hr>
<caption><h2>Complaint Record</h2></caption>
<table class="table table-hover">
	
	<tr>
		<th>Room ID</th>
		<th>Roll Number</th>
		<th>Date</th>
		<th>Status</th>
		<th>Particular</th>
		<th>Action</th>
 
	</tr>
<?php 
 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * 
            FROM complaint 
            Where Status = 'pending' " ;
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Room_Id=$DataRows['room_id'];
	$Roll_Number=$DataRows['rollno'];
	$Date=$DataRows['date1'];
	$Status=$DataRows['status'];
	$Particular=$DataRows['particular'];


 ?>
 <tr>
<td><?php echo $Room_Id ;?></td>
<td><?php echo $Roll_Number; ?></td>
<td><?php echo $Date; ?></td>
<td><?php echo $Status; ?></td>
<td><?php echo $Particular; ?></td>
<td><a href="complaint_update.php?update=<?php echo $Roll_Number; ?>">Taken</a></td>

</tr>

<?php } ?>
</table>




</body>
</html>