<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Room Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="room_view.php" method="GET">
	</div>

</form>

<br><hr>
<caption><h2>Room Record</h2></caption>
<table class="table table-hover">
	
	<tr>
		<th>Room_Id</th>
		<th>Capacity</th>
		<th>Name_Of_Student</th>
		<th>Roll_No</th>
		<th>Hostel_Id</th>
		

 
	</tr>
<?php 
 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * 
            FROM room " ;
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Room_Id=$DataRows['room_id'];
	$Capacity=$DataRows['capacity'];
	$Name_Of_Student=$DataRows['name_of_student'];
	$Rollno=$DataRows['rollno'];
	$Hostel_Id=$DataRows['hostel_id'];
	
	


 ?>
 <tr>
<td><?php echo $Room_Id ;?></td>
<td><?php echo $Capacity; ?></td>
<td><?php echo $Name_Of_Student; ?></td>
<td><?php echo $Rollno; ?></td>
<td><?php echo $Hostel_Id; ?></td>


</tr>

<?php } ?>
</table>




</body>
</html>