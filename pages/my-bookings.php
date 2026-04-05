<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

include '../includes/config.php';
include '../includes/header.php';

$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM bookings WHERE user_id='$user_id' ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5 pt-5">

<h2 class="text-center mb-4 fw-bold">My Bookings</h2>

<table class="table table-hover table-bordered shadow">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>Place</th>
<th>Date</th>
<th>Tickets</th>
<th>Amount</th>
<th>Status</th>
<th>Download</th>
</tr>
</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['place_name']; ?></td>
<td><?php echo $row['visit_date']; ?></td>
<td><?php echo $row['tickets']; ?></td>
<td>₹<?php echo $row['total_amount']; ?></td>

<!-- STATUS -->
<td>
<?php
$status = $row['payment_status'];

if($status == 'Pending'){
    echo "<span class='badge bg-warning'>Pending</span>";
}
elseif($status == 'Confirmed'){
    echo "<span class='badge bg-success'>Confirmed</span>";
}
else{
    echo "<span class='badge bg-danger'>Rejected</span>";
}
?>
</td>

<!-- DOWNLOAD BUTTON (ONLY IF CONFIRMED) -->
<td>
<?php if($row['payment_status'] == 'Confirmed'){ ?>
    <a href="download-ticket.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">
        Download PDF
    </a>
<?php } else { ?>
    <span class="text-muted">Not Available</span>
<?php } ?>
</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<?php include '../includes/footer.php'; ?>



<!-- CREATE TABLE bookings (
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
place_name VARCHAR(100),
visit_date DATE,
tickets INT,
total_amount INT,
payment_status VARCHAR(50) DEFAULT 'Pending',
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->