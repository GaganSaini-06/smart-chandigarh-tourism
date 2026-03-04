<?php include 'includes/header.php'; ?>

<!-- HERO SECTION -->
<section class="hero-section">
    <div class="hero-overlay"></div>

    <div class="hero-content text-center">
        <h1>Welcome to Chandigarh</h1>
        <p>Explore the City Beautiful with Us</p>

        <div class="hero-buttons">
            <a href="places.php" class="btn btn-main">Explore Places</a>
        </div>
    </div>
</section>

<!-- TOP PLACES SECTION -->
<section class="places-section container text-center">
    <h2 class="section-title">Top Attractions</h2>

    <div class="row mt-4">

        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="place-card">
                <img src="images/rock_garden.png" alt="Rock Garden">
                <div class="place-overlay">
                    <h5>Rock Garden</h5>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="place-card">
                <img src="images/sukhna_lake.png" alt="Sukhna Lake">
                <div class="place-overlay">
                    <h5>Sukhna Lake</h5>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="place-card">
                <img src="images/rose_garden.png" alt="Rose Garden">
                <div class="place-overlay">
                    <h5>Rose Garden</h5>
                </div>
            </div>
        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>