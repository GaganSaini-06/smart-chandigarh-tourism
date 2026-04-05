<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chandigarh Tourism</title>

    <link rel="stylesheet" href="/smart-chandigarh-tourism/css/style.css">
    <link rel="stylesheet" href="/smart-chandigarh-tourism/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top custom-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Chandigarh Guide</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="/smart-chandigarh-tourism/index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/smart-chandigarh-tourism/pages/about-project.php">About Project</a></li>
                <li class="nav-item"><a class="nav-link" href="/smart-chandigarh-tourism/pages/places.php">Places</a></li>
                
                <!-- User Dashboard -->
                <?php if(isset($_SESSION['user_id'])) { ?>

                        <li class="nav-item">
                        <a class="nav-link" href="/smart-chandigarh-tourism/pages/my-bookings.php">My Bookings</a>
                        </li>

                <?php } ?>

                <!-- Admin Panel -->
                <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] == 1) { ?>

                        <li class="nav-item">
                        <a class="nav-link" href="/smart-chandigarh-tourism/admin/dashboard.php">Admin</a>
                        </li>

                <?php } ?>
                
                <!-- Login, Logout and register -->
                <?php if(isset($_SESSION['user_id'])) { ?>

                    <li class="nav-item">
                    <span class="nav-link">Hello, <?php echo $_SESSION['user_name']; ?></span>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="/smart-chandigarh-tourism/pages/logout.php">Logout</a>
                    </li>

                    <?php } else { ?>

                    <li class="nav-item">
                    <a class="nav-link" href="/smart-chandigarh-tourism/pages/login.php">Login</a>
                    </li>

                    <li class="nav-item">
                    <a class="nav-link" href="/smart-chandigarh-tourism/pages/register.php">Register</a>
                    </li>

                    <?php } ?>
            </ul>
        </div>
    </div>
</nav>