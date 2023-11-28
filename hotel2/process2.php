<?php

$namet = $_POST['namet'];
$numbercredit = $_POST['numbercredit'];
$month = $_POST['month'];
$year = $_POST['year'];
$cvv = $_POST['cvv'];


// Database connection
$conn = new mysqli('localhost','root','','prueba');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into payment(namet, numbercredit, month, year, cvv)values( ?, ?, ?, ?, ?)");
	$stmt->bind_param("siiis", $namet, $numbercredit,  $month, $year, $cvv);
	$execval = $stmt->execute();
	echo $execval;
    
	
	$stmt->close();
	$conn->close();
}
?>

<?php
if (isset ($_POST["namet"]))
{
    header ('location:index.html');
}

?>
