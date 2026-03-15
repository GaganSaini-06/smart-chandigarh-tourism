<?php 
include '../includes/header.php';
include '../includes/config.php';

if(isset($_POST['register']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$hashed_password')";

if(mysqli_query($conn,$sql))
{
echo "<script>alert('Registration Successful! Please Login');</script>";
}
else
{
echo "<script>alert('Error: Email already exists');</script>";
}
}
?>

<div class="container mt-5 pt-5">
<div class="row justify-content-center">

<div class="col-md-5">

<div class="card shadow p-4">

<h3 class="text-center mb-4">Create Account</h3>

<form method="POST">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<button type="submit" name="register" class="btn btn-main w-100">
Register
</button>

</form>

<p class="text-center mt-3">
Already have an account? 
<a href="login.php">Login</a>
</p>

</div>

</div>

</div>
</div>

<?php include '../includes/footer.php'; ?>