<?php
session_start();

if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] != 1){
    header("Location: ../index.php");
    exit();
}

include '../includes/config.php';
include '../includes/header.php';

// Fetch bookings with user names
$sql = "SELECT bookings.*, users.name 
        FROM bookings 
        JOIN users ON bookings.user_id = users.id 
        ORDER BY bookings.id DESC";

$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5 pt-5">

<h2 class="text-center mb-4 fw-bold">Admin Dashboard</h2>

<table class="table table-hover table-bordered shadow">

<thead class="table-dark">
<tr>
<th>ID</th>
<th>User</th>
<th>Place</th>
<th>Date</th>
<th>Tickets</th>
<th>Amount</th>
<th>UTR</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['place_name']; ?></td>
<td><?php echo $row['visit_date']; ?></td>
<td><?php echo $row['tickets']; ?></td>
<td>₹<?php echo $row['total_amount']; ?></td>
<td><?php echo $row['utr_number']; ?></td>

<!-- STATUS BADGE -->
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

<!-- ACTION BUTTONS -->
<td>
<a href="approve.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Approve</a>
<a href="reject.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Reject</a>
</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<?php include '../includes/footer.php'; ?>