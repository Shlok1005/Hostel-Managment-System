<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Staff View</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<caption><h2>Staff Data</h2></caption>
	<table class="table table-hover">
		
		<tr>
			<th>id</th>			
			<th>Name</th>					
			<th>Address</th>			
			<th>City</th>			
			<th>State</th>			
			<th>Pincode</th>			
			<th>Mobile</th>			
			<th>Hostel id</th>				
			<th>Designation</th>			
				

		</tr>

<?php 
$variable = $_SESSION["Name"] ; 
$Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * 
           FROM staff
         WHERE hostel_id = (
	           SELECT hostel_id
	           FROM student
	           WHERE rollno = '$variable'
) ";

$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Emp_id=$DataRows['emp_id'];
	$Emp_name=$DataRows['emp_name'];
	$Address=$DataRows['address'];
	$City=$DataRows['city'];
	$State=$DataRows['state'];
	$Pincode=$DataRows['pincode'];
	$Mobile_number=$DataRows['mobile_number'];
	$Hostel_id=$DataRows['hostel_id'];
	$Designation=$DataRows['designation'];

 ?>
 
 <tr>
<td><?php echo $Emp_id ;?></td>
<td><?php echo $Emp_name; ?></td>
<td><?php echo $Address; ?></td>
<td><?php echo $City; ?></td>
<td><?php echo $State; ?></td>
<td><?php echo $Pincode; ?></td>
<td><?php echo $Mobile_number; ?></td>
<td><?php echo $Hostel_id; ?></td>
<td><?php echo $Designation; ?></td>


</tr>

<?php } ?>

	

	</table>


</body>
</html>