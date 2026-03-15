<?php
session_start();
include '../includes/config.php';

$user_id = $_SESSION['user_id'];

$place = $_POST['place'];
$visit_date = $_POST['visit_date'];
$tickets = $_POST['tickets'];
$total = $_POST['total'];

$utr = $_POST['utr'];

$sql = "INSERT INTO bookings (user_id,place_name,visit_date,tickets,total_amount,payment_status,utr_number)
VALUES ('$user_id','$place','$visit_date','$tickets','$total','Pending','$utr')";

mysqli_query($conn,$sql);

header("Location: ticket-confirmation.php?place=$place&tickets=$tickets&date=$visit_date&total=$total");
?>