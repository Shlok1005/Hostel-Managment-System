

<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Student Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="student_view.php" method="GET">
	</div>

</form>

<br><hr>
<caption><h2>Student Record</h2></caption>
<table class="table table-hover" >
	
	<tr>
		<th>Roll_No</th>
		<th>Student_Name</th>
		<th>Father_Name</th>
		<th>Age</th>
		<th>DOB</th>
		<th>Branch</th>
		<th>Primary_Mobile_No</th>
		<th>Secondary_Mobile_No</th>
		<th>Sex</th>
		<th>Year</th>
		<th>Hostel_Id</th>
		<th>Room_Id</th>
		<th>Blood_Group</th>
		<th>Home_Address</th>
		<th>City</th>
		<th>State</th>
		<th>Pincode</th>
		

 
	</tr>
<?php 

 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * 
            FROM student
            ";
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Roll_No=$DataRows['rollno'];
	$Student_Name=$DataRows['student_name'];
	$Father_Name=$DataRows['father_name'];
	$Age=$DataRows['age'];
	$DOB=$DataRows['dob'];
	$Branch=$DataRows['branch'];
	$Primary_Mobile_No=$DataRows['primary_mobile_no'];
	$Secondary_Mobile_No=$DataRows['secondary_mobile_no'];
	$Sex=$DataRows['sex'];
	$Year=$DataRows['year'];
	$Hostel_Id=$DataRows['hostel_id'];
	$Room_Id=$DataRows['room_id'];
	$Blood_Group=$DataRows['blood_group'];
	$Home_Address=$DataRows['home_address'];
	$City=$DataRows['city'];
	$State=$DataRows['state'];
	$Pincode=$DataRows['pincode'];
	
	


 ?>
 <tr>
<td><?php echo $Roll_No;?></td>
<td><?php echo $Student_Name;?></td>
<td><?php echo $Father_Name;?></td>
<td><?php echo $Age;?></td>
<td><?php echo $DOB;?></td>
<td><?php echo $Branch;?></td>
<td><?php echo $Primary_Mobile_No;?></td>
<td><?php echo $Secondary_Mobile_No;?></td>
<td><?php echo $Sex;?></td>
<td><?php echo $Year;?></td>
<td><?php echo $Hostel_Id;?></td>
<td><?php echo $Room_Id;?></td>
<td><?php echo $Blood_Group;?></td>
<td><?php echo $Home_Address;?></td>
<td><?php echo $City;?></td>
<td><?php echo $State;?></td>
<td><?php echo $Pincode;?></td>

</tr>

<?php } ?>
</table>




</body>
</html>