<!DOCTYPE html>
<html>
<head>
	<style >h2 {text-align: center;}</style>
	<title>Sports Equipment Record</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<form action="sports_view.php" method="GET">
	</div>

</form>

<br><hr>
<caption><h2>Sports Equipment Record</h2></caption>
<table class="table table-hover">
	
	<tr>
		<th>Issue_Date</th>
		<th>Return_Date</th>
		<th>Equipment_Id</th>
		<th>Roll_No</th>
		<th>Fine</th>
		<th>Equipment_Details</th>
		<th>Hostel_Id</th>
		

 
	</tr>
<?php 
 $Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);
$ViewQuery="SELECT * 
            FROM sports";
$Execute=mysql_query($ViewQuery);



while($DataRows=mysql_fetch_array($Execute)){
	$Issue_Date=$DataRows['issue_date'];
	$Return_Date=$DataRows['return_date'];
	$Equipment_Id=$DataRows['equipment_id'];
	$Rollno=$DataRows['rollno'];
	$Fine=$DataRows['fine'];
	$Equipment_Details=$DataRows['equipment_details'];
	$Hostel_Id=$DataRows['hostel_id'];
	
	


 ?>
 <tr>
<td><?php echo $Issue_Date;?></td>
<td><?php echo $Return_Date;?></td>
<td><?php echo $Equipment_Id; ?></td>
<td><?php echo $Rollno; ?></td>
<td><?php echo $Fine;?></td>
<td><?php echo $Equipment_Details;?></td>
<td><?php echo $Hostel_Id;?></td>


</tr>

<?php } ?>
</table>




</body>
</html>