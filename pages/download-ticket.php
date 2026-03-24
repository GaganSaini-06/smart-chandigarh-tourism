<?php
require_once '../dompdf/autoload.inc.php';

use Dompdf\Dompdf;

include '../includes/config.php';

$id = $_GET['id'];

$sql = "SELECT * FROM bookings WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// HTML Ticket Design
$html = '
<div style="text-align:center;">
    <h2>Chandigarh Tourism Ticket</h2>
</div>
<hr>

<p><strong>Booking ID:</strong> '.$row['id'].'</p>
<p><strong>Place:</strong> '.$row['place_name'].'</p>
<p><strong>Date:</strong> '.$row['visit_date'].'</p>
<p><strong>Tickets:</strong> '.$row['tickets'].'</p>
<p><strong>Total Amount:</strong> ₹'.$row['total_amount'].'</p>
<p><strong>Status:</strong> '.$row['payment_status'].'</p>

<br><br>
<p style="text-align:center;">Thank you for booking with us!</p>
';

$dompdf = new Dompdf();
$dompdf->loadHtml($html);
$dompdf->render();

// Download PDF
$dompdf->stream("ticket.pdf", ["Attachment" => true]);
?>


<!-- At line No. 17 -> <img src="/smart-chandigarh-tourism/images/pdf.jpg" width="80"> -->