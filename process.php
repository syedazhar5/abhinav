<?php
include_once('connect.php');
$conn = getConnection();

// create a variable  
$p_name=$_POST['p_name'];
$contact_no =$_POST['contact_no'];
$city=$_POST['city'];
$appointment_date=$_POST['appointment_date'];
$opd=$_POST['opd'];
$sql = "INSERT INTO appointment_form(p_name, contact_no,city, appointment_date,opd) VALUES ('$p_name', '$contact_no','$city','$appointment_date','$opd')";
if ($conn->query($sql) === TRUE) {
  echo "Apppointment booked successfully";
  header('refresh:5;url=index.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 