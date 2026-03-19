<?php session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1){
    header("Location: ../index.php");
    exit();
}
?>

<?php
include '../includes/config.php';

$id = $_GET['id'];

$sql = "UPDATE bookings SET payment_status='Confirmed' WHERE id='$id'";
mysqli_query($conn,$sql);

header("Location: dashboard.php");
?>