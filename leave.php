<?php
session_start();
?>

<?php
$variable = $_SESSION["Name"] ;
$Roll_Number = $variable ;

           
if(isset($_POST["Submit"])){
$Type= $_POST["Type"];
$Start_Date= $_POST["Start_Date"];
$Number_Of_Days= $_POST["Number_Of_Days"];
$Connection=mysql_connect('localhost','root','');
$Selected=mysql_select_db('dbms',$Connection);

$Query1 = "SELECT hostel_id
           FROM student
           WHERE rollno = '$variable'
              ";
$result = mysql_query($Query1);  
$row = mysql_fetch_row($result); 
$Hostel_Id = $row[0];

$Query="INSERT INTO  leaveform(rollno,type,start_date,no_of_days,hostel_id) VALUES('$Roll_Number','$Type','$Start_Date','$Number_Of_Days', '$Hostel_Id')";
            $Execute=mysql_query($Query); 
if($Execute){
	echo "<h2>Record saved</h2>";
}

}
?>  



<!DOCTYPE>
<html>
	<head>
		<title>leave</title>
		<link rel="stylesheet" href="css/visitor_style.css">
	</head>
	<style media="screen">
	</style>
	<body>
<?php ?>
<div>
	<form class="" action="" method="post">
		<fieldset>
			<span class="FieldInfo">Type:</span>
			<br>
			<input type="text" name="Type" value="">
			<br>
			<span class="FieldInfo">Start Date:</span>
			<br>
			<input type="Date" name="Start_Date" value="">
			<br>
            <span class="FieldInfo">NUMBER OF DAYS:</span>
			<br>
			<input type="text" name="Number_Of_Days" value="">
			<br>
			<button type="Submit" name="Submit" value="Submit your record">SUBMIT</button>
		</fieldset>
	</form>
</div>


	</body>
</html>