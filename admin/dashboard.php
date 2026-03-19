<?php
include '../includes/config.php';
include '../includes/header.php';

$sql = "SELECT bookings.*, users.name 
        FROM bookings 
        JOIN users ON bookings.user_id = users.id 
        ORDER BY bookings.id DESC";

$result = mysqli_query($conn,$sql);
?>

<div class="container mt-5 pt-5">

<h2 class="text-center mb-4">Admin Dashboard</h2>

<table class="table table-bordered text-center">

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
<td><?php echo $row['payment_status']; ?></td>

<td>
<?php if($row['payment_status'] == 'Pending') { ?>

<a href="approve.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm">Approve</a>

<a href="reject.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Reject</a>

<?php } else { ?>
—
<?php } ?>
</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

<?php include '../includes/footer.php'; ?>