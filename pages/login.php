<?php
session_start();
include '../includes/config.php';
include '../includes/header.php';

if(isset($_POST['login']))
{
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
{
$user = mysqli_fetch_assoc($result);

if(password_verify($password,$user['password']))
{
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['name'];

echo "<script>alert('Login Successful'); window.location='../index.php';</script>";
}
else
{
echo "<script>alert('Incorrect Password');</script>";
}

}
else
{
echo "<script>alert('User not found');</script>";
}

}
?>

<div class="container mt-5 pt-5">
<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow p-4">

<h3 class="text-center mb-4">Login</h3>

<form method="POST">

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="login" class="btn btn-main w-100">
Login
</button>

</form>

<p class="text-center mt-3">
Don't have an account? 
<a href="register.php">Register</a>
</p>

</div>

</div>

</div>
</div>

<?php include '../includes/footer.php'; ?>


<!-- for Login & Register

DATABASE - tourism_db

CREATE TABLE users (
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
password VARCHAR(255) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->