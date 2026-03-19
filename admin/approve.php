<?php
include '../includes/config.php';

$id = $_GET['id'];

$sql = "UPDATE bookings SET payment_status='Confirmed' WHERE id='$id'";
mysqli_query($conn,$sql);

header("Location: dashboard.php");
?>