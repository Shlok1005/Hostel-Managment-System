<?php
session_start();
?>

<?php 
$variable = $_SESSION["Name"] ;
$Roll_Number = $variable ;

if(isset($_POST["Submit"]))
{
		$Date=$_POST["Date"];
		$Particular = $_POST["Particular"];
$Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);

$Query1 = "SELECT room_id
           FROM student
           WHERE rollno = '$variable'
              ";
$result = mysql_query($Query1);  
$row = mysql_fetch_row($result); 
$Room_Id = $row[0];



$Query="INSERT INTO complaint(room_id, rollno, date1, particular)
VALUES('$Room_Id','$Roll_Number','$Date','$Particular')" ;

$Execute=mysql_query($Query);

if($Execute){
	echo "<h2>record saved</h2>"; 
}


}


 ?>

<!DOCTYPE>
<html>
	<head>
		<title>Complaint</title>
		<link rel="stylesheet" href="css/visitor_style.css">
	</head>
	<style media="screen">
	</style>
	<body>

<div>
	<form class="" action="" method="post">
		<fieldset>
			<span class="FieldInfo">Date:</span>
			<br>
			<input type="Date" name="Date" value="">
			<br>
			<span class="FieldInfo">Particular:</span>
			<br>
			<input type="text" name="Particular" value="">
			<br>
			<button type="Submit" name="Submit" value="Submit your record">SUBMIT</button>
		</fieldset>
	</form>
</div>

	</body>
</html>