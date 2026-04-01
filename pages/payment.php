<?php
session_start();
include '../includes/config.php';
include '../includes/header.php';

if(!isset($_SESSION['user_id']))
{
header("Location: login.php");
exit();
}

$place = $_POST['place'];
$visit_date = $_POST['visit_date'];
$tickets = $_POST['tickets'];
$total = $tickets * 1;
?>

<div class="container mt-5 pt-5">

<h2 class="text-center mb-4">Payment</h2>

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4 text-center">

<h4><?php echo $place; ?></h4>

<p>Visit Date: <?php echo $visit_date; ?></p>

<p>Tickets: <?php echo $tickets; ?></p>

<h3>Total Amount: ₹<?php echo $total; ?></h3>

<hr>

<h5>Scan & Pay using Google Pay</h5>

<img src="../images/payment-qr.jpeg" width="220" class="d-block mx-auto mt-3">

<p class="mt-3">After payment click confirm button</p>

<form action="confirm-booking.php" method="POST">

<input type="hidden" name="place" value="<?php echo $place; ?>">
<input type="hidden" name="visit_date" value="<?php echo $visit_date; ?>">
<input type="hidden" name="tickets" value="<?php echo $tickets; ?>">
<input type="hidden" name="total" value="<?php echo $total; ?>">

<div class="mt-3">
<label>Enter Payment UTR Number</label>
<input type="text" name="utr" class="form-control" required>
</div>

<button class="btn btn-main mt-3">Confirm Payment</button>

</form>

</div>

</div>

</div>

</div>

<?php include '../includes/footer.php'; ?>