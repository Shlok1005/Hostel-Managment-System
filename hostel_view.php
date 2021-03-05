<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Hostel View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<caption><h2>Hostel Data</h2></caption>
	<table class="table table-hover">
		
		<tr>
			<th>Hostel id</th>			
			<th>No of Rooms</th>			
			<th>No of Students</th>			
			<th>Location</th>			
			<th>Hostel Name</th>			
			<th>Rooms Vacant</th>			
			<th>Delete</th>			

		</tr>
 
<?php 

 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * FROM hostel" ;
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Hostel_id=$DataRows['hostel_id'];
	$No_of_Rooms=$DataRows['no_of_rooms'];
	$No_of_Students=$DataRows['no_of_students'];
	$Location=$DataRows['location'];
	$Hostel_Name=$DataRows['hostel_name'];
	$Rooms_Vacant=$DataRows['rooms_vacant'];


 ?>
 <tr>
<td><?php echo $Hostel_id ;?></td>
<td><?php echo $No_of_Rooms; ?></td>
<td><?php echo $No_of_Students; ?></td>
<td><?php echo $Location; ?></td>
<td><?php echo $Hostel_Name; ?></td>
<td><?php echo $Rooms_Vacant; ?></td>
<td><a href="Hostel_Delete.php?Delete=<?php echo $Hostel_id; ?>"> Delete</a></td>


</tr>

<?php } ?>

	

	</table>


</body>
</html>