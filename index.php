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

<!-- PLACES SECTION -->
<section class="container py-5">

    <h2 class="section-title text-center">Top Places to Visit</h2>

    <div class="row g-4">

        <!-- Place 1 -->
        <div class="col-md-4">
            <div class="place-card">
                <img src="images/sukhna_lake.png" alt="Sukhna Lake">

                <div class="place-overlay">
                    <h5>Sukhna Lake</h5>
                    <p>A peaceful lake perfect for boating and relaxing evenings.</p>
                </div>

            </div>
        </div>

        <!-- Place 2 -->
        <div class="col-md-4">
            <div class="place-card">
                <img src="images/rock_garden.png" alt="Rock Garden">

                <div class="place-overlay">
                    <h5>Rock Garden</h5>
                    <p>A famous sculpture garden built from industrial waste.</p>
                </div>

            </div>
        </div>

        <!-- Place 3 -->
        <div class="col-md-4">
            <div class="place-card">
                <img src="images/rose_garden.png" alt="Rose Garden">

                <div class="place-overlay">
                    <h5>Rose Garden</h5>
                    <p>Asia’s largest rose garden with thousands of varieties.</p>
                </div>

            </div>
        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>