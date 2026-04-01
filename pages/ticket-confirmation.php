<?php
include '../includes/header.php';

$place = $_GET['place'];
$tickets = $_GET['tickets'];
$date = $_GET['date'];
$total = $_GET['total'];
?>

<div class="container mt-5 pt-5 text-center">

<div class="card shadow p-5">

<h2 class="text-success">🎉 Your booking request has been submitted! Please wait for admin approval.</h2>

<hr>

<h4>Place: <?php echo $place; ?></h4>

<p>Visit Date: <?php echo $date; ?></p>

<p>Tickets: <?php echo $tickets; ?></p>

<h4>Total Paid: ₹<?php echo $total; ?></h4>

<a href="../index.php" class="btn btn-main mt-4">Back to Home</a>

</div>

</div>

<?php include '../includes/footer.php'; ?>