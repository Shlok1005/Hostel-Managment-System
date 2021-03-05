<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>LEAVE Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="leave_view.php" method="GET">
	</div>

</form>

<br><hr>
<caption><h2>Leave Record</h2></caption>
<table class="table table-hover">
	
	<tr>
		<th>Roll Number</th>
		<th>Type</th>
		<th>Start Date</th>
		<th>Number Of Days</th>
		<th>Status</th>
		<th>Hostel Id</th>
		<th>Action</th>
		<th>Action</th>

 
	</tr>
<?php 
 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * 
            FROM leaveform Where Status = 'pending' " ;
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Roll_Number=$DataRows['rollno'];
	$Type=$DataRows['type'];
	$Start_Date=$DataRows['start_date'];
	$Number_Of_Days=$DataRows['no_of_days'];
	$Status=$DataRows['status'];
	$Hostel_Id=$DataRows['hostel_id'];


 ?>
 <tr>
<td><?php echo $Roll_Number ;?></td>
<td><?php echo $Type; ?></td>
<td><?php echo $Start_Date; ?></td>
<td><?php echo $Number_Of_Days; ?></td>
<td><?php echo $Status; ?></td>
<td><?php echo $Hostel_Id; ?></td>
<td><a href="leave_update.php?update=<?php echo $Roll_Number; ?>">Approve</a></td>
<td><a href="leave_update_deny.php?update=<?php echo $Roll_Number; ?>">Deny</a></td>
</tr>



<?php } ?>
</table>




</body>
</html>