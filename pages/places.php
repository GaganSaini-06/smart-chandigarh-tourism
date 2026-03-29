<?php include '../includes/header.php'; ?>

<?php
$search = "";
if(isset($_GET['search'])){
    $search = strtolower($_GET['search']);
}
?>

<?php
$found = false;
?>

<div class="container py-5 mt-5">
    
<h1 class="section-title text-center">Top Places to Visit in Chandigarh</h1>

<!-- 🔍 SEARCH BOX -->
<form method="GET" class="text-center mb-4">
    <input type="text" name="search" placeholder="Search places..." 
           class="form-control w-50 d-inline" value="<?php echo $search; ?>">
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<div class="row g-4">

<!-- Place 1 -->
<?php if($search=="" || strpos("sukhna lake", $search)!==false){ 
    $found = true;
?>
<div class="col-md-4">
<div class="place-card">
<img src="../images/sukhna_lake.png">
<div class="place-overlay">
<h5>Sukhna Lake</h5>
<p>Beautiful lake for boating, walking and sunset views.</p>
<a href="place-details.php?id=1" class="btn btn-light btn-sm">View Details</a>
</div>
</div>
</div>
<?php } ?>

<!-- Place 2 -->
<?php if($search=="" || strpos("rock garden", $search)!==false){ 
    $found = true;
?>
<div class="col-md-4">
<div class="place-card">
<img src="../images/rock_garden.png">
<div class="place-overlay">
<h5>Rock Garden</h5>
<p>A famous sculpture garden built from recycled materials.</p>
<a href="place-details.php?id=2" class="btn btn-light btn-sm">View Details</a>
</div>
</div>
</div>
<?php } ?>

<!-- Place 3 -->
<?php if($search=="" || strpos("rose garden", $search)!==false){ 
    $found = true;
?><div class="col-md-4">
<div class="place-card">
<img src="../images/rose_garden.png">
<div class="place-overlay">
<h5>Zakir Hussain Rose Garden</h5>
<p>Asia's largest rose garden with thousands of varieties.</p>
<a href="place-details.php?id=3" class="btn btn-light btn-sm">View Details</a>
</div>
</div>
</div>
<?php } ?>

<!-- Place 4 -->
<?php if($search=="" || strpos("elante mall", $search)!==false){ 
    $found = true;
?>
<div class="col-md-4">
<div class="place-card">
<img src="../images/elante_mall.jpg">
<div class="place-overlay">
<h5>Elante Mall</h5>
<p>Largest shopping mall in Chandigarh with entertainment.</p>
<a href="place-details.php?id=4" class="btn btn-light btn-sm">View Details</a>
</div>
</div>
</div>
<?php } ?>

<!-- Place 5 -->
<?php if($search=="" || strpos("copitol complex", $search)!==false){ 
    $found = true;
?>
<div class="col-md-4">
<div class="place-card">
<img src="../images/copitol_complex.jpg">
<div class="place-overlay">
<h5>Capitol Complex</h5>
<p>UNESCO World Heritage site designed by Le Corbusier.</p>
<a href="place-details.php?id=5" class="btn btn-light btn-sm">View Details</a>
</div>
</div>
</div>
<?php } ?>

<!-- Place 6 -->
<?php if($search=="" || strpos("sector 17", $search)!==false){ 
    $found = true;
?>
<div class="col-md-4">
<div class="place-card">
<img src="../images/sector_17.jpg">
<div class="place-overlay">
<h5>Sector 17 Plaza</h5>
<p>Famous market area for shopping, food and nightlife.</p>
<a href="place-details.php?id=6" class="btn btn-light btn-sm">View Details</a>
</div>
</div>
</div>
<?php } ?>


<?php if(!$found){ ?>
    <div class="col-12 text-center">
        <h4 class="text-danger">No results found 🔍</h4>
        <p>Please try a different keyword.</p>
    </div>
<?php } ?>

</div>

</div>

<?php include '../includes/footer.php'; ?>