<?php

$name = $_POST['name'];
$rut = $_POST['rut'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Database connection
$conn = new mysqli('localhost','root','','prueba');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into hotel132(name, rut, email, phone)values( ?, ?, ?, ?)");
	$stmt->bind_param("sssi", $name, $rut,  $email, $phone);
	$execval = $stmt->execute();
	echo $execval;
	
	$stmt->close();
	$conn->close();
}
?>

<?php
if (isset ($_POST["name"]))
{
    header ('location:payment.html');
}
?>
<?


