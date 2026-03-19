<?php
session_start();
include '../includes/config.php';
include '../includes/header.php';

if(!isset($_SESSION['user_id']))
{
header("Location: login.php");
exit();
}

$place = $_GET['place'];
$ticket_price = 1;

?>

<div class="container mt-5 pt-5">

<h2 class="text-center mb-4">Book Ticket - <?php echo $place; ?></h2>

<div class="row justify-content-center">

<div class="col-md-6">

<div class="card shadow p-4">

<form action="payment.php" method="POST">

<input type="hidden" name="place" value="<?php echo $place; ?>">

<div class="mb-3">
<label>Your Name</label>
<input type="text" class="form-control" value="<?php echo $_SESSION['user_name']; ?>" readonly>
</div>

<div class="mb-3">
<label>Visit Date</label>
<input type="date" name="visit_date" class="form-control" required>
</div>

<div class="mb-3">
<label>Number of Tickets</label>
<input type="number" name="tickets" id="tickets" class="form-control" value="1" min="1" required>
</div>

<div class="mb-3">
<label>Total Amount (₹)</label>
<input type="text" id="total" class="form-control" value="1" readonly>
</div>

<button class="btn btn-main w-100">Proceed to Payment</button>

</form>

</div>

</div>

</div>

</div>

<script>

let price = 1;

document.getElementById("tickets").addEventListener("input", function() {

let tickets = this.value;
document.getElementById("total").value = tickets * price;

});

</script>

<?php include '../includes/footer.php'; ?>


<!-- for booking tickets

CREATE TABLE bookings (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
place_name VARCHAR(100),
visit_date DATE,
tickets INT,
total_amount INT,
payment_status VARCHAR(50) DEFAULT 'Pending',
utr_number VARCHAR(100),
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->


<!-- ALTER TABLE bookings ADD utr_number VARCHAR(100); -->