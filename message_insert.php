<?php 

if(isset($_POST["Submit"]))
{
	$Roll_Number =$_POST["Roll_Number"];
	
		$Date =$_POST["Date"];
		$Message =$_POST["Message"];
		$From = $_POST["From"];
$Connection=mysql_connect('localhost','root','');
$Selected= mysql_select_db('dbms',$Connection);

if ($Roll_Number=='ALL') {

$ViewQuery="SELECT rollno 
            FROM student
            ";
$Execute=mysql_query($ViewQuery);


while($DataRows=mysql_fetch_array($Execute)){
	$Roll_No=$DataRows['rollno'];
	$variable = $Roll_No ;
$Query1="INSERT INTO message(rollno,date1,message,from1) 
VALUES('$Roll_No','$Date','$Message','$From')" ;
$Execute1=mysql_query($Query1);

	}

}else	
{
$Query="INSERT INTO message(rollno,date1,message,from1) 
VALUES('$Roll_Number','$Date','$Message','$From')" ;
$Execute=mysql_query($Query);
}



if($Execute){
	echo "<h2>Record saved </h2>";
}

}


 ?>

<!DOCTYPE>
<html>
	<head>
		<title>Message insert</title>
		<link rel="stylesheet" href="css/visitor_style.css">
	</head>
	<style media="screen">
	</style>
	<body>
<?php ?>
<div>
	<form class="" action="" method="post">
		<fieldset>
			<span class="FieldInfo">Roll Number:(To send to all the students type ALL)</span>
			<br>
			<input type="text" name="Roll_Number" value="">
			<br><br>
			<span class="FieldInfo">DATE:</span>
			<br>
			<input type="Date" name="Date" value="">
			<br><br>
			<span class="FieldInfo">Message/Notice:</span>
			<br>
			<textarea name="Message" rows="8" cols="80"></textarea>
			<br><br>
			<span class="FieldInfo">From:</span>
			<br>
			<input type="text" name="From" value="">
			<br><br>

			
			<button type="Submit" name="Submit" value="Submit your record">SUBMIT</button>
		</fieldset>
	</form>
</div>

	</body>
</html>