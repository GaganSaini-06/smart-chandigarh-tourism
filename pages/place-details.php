<?php include '../includes/header.php'; ?>

<?php

$id = $_GET['id'];

$places = [

1 => [
"name" => "Sukhna Lake",
"image" => "../images/sukhna_lake.png",
"description" => "Sukhna Lake is a beautiful man-made lake located at the foothills of the Shivalik hills.",
"timing" => "5:00 AM – 9:00 PM",
"fee" => "Free entry",
"ticket" => false
],

2 => [
"name" => "Rock Garden",
"image" => "../images/rock_garden.png",
"description" => "Rock Garden is a unique sculpture garden created by Nek Chand using industrial waste.",
"timing" => "9:00 AM – 7:00 PM",
"fee" => "₹30",
"ticket" => true
],

3 => [
"name" => "Rose Garden",
"image" => "../images/rose_garden.png",
"description" => "Zakir Hussain Rose Garden is Asia's largest rose garden with more than 1600 varieties of roses.",
"timing" => "6:00 AM – 8:00 PM",
"fee" => "Free entry",
"ticket" => false
],

4 => [
"name" => "Elante Mall",
"image" => "../images/elante_mall.jpg",
"description" => "Elante Mall is the biggest shopping mall in Chandigarh with shopping brands, restaurants and cinema.",
"timing" => "11:00 AM – 10:00 PM",
"fee" => "Free entry",
"ticket" => false
],

5 => [
"name" => "Capitol Complex",
"image" => "../images/copitol_complex.jpg",
"description" => "Capitol Complex is a UNESCO World Heritage site designed by Le Corbusier.",
"timing" => "9:00 AM – 5:00 PM",
"fee" => "Free entry",
"ticket" => false
],

6 => [
"name" => "Sector 17 Plaza",
"image" => "../images/sector_17.jpg",
"description" => "Sector 17 Plaza is the most famous shopping and cultural hub of Chandigarh.",
"timing" => "10:00 AM – 9:00 PM",
"fee" => "Free entry",
"ticket" => false
]

];

$place = $places[$id];

?>

<div class="container mt-5 pt-5">

<div class="row">

<div class="col-md-6">
<img src="<?php echo $place['image']; ?>" class="img-fluid rounded shadow">
</div>

<div class="col-md-6">

<h2><?php echo $place['name']; ?></h2>

<p class="mt-3"><?php echo $place['description']; ?></p>

<ul class="list-group mt-4">

<li class="list-group-item">
<strong>Entry Fee:</strong> <?php echo $place['fee']; ?>
</li>

<li class="list-group-item">
<strong>Timings:</strong> <?php echo $place['timing']; ?>
</li>

</ul>

<?php if($place['ticket']) { ?>

<a href="book-ticket.php?place=<?php echo urlencode($place['name']); ?>" class="btn btn-main mt-4">Book Ticket</a>

<?php } else { ?>

<button class="btn btn-success mt-4" disabled>Free Entry</button>

<?php } ?>
</div>

</div>

</div>

<?php include '../includes/footer.php'; ?>