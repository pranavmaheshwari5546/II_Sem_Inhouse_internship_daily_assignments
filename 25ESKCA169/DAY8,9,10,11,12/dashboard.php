<?php
 include ("dashoardHeader.php");
 session_start();
 if(!isset($_SESSION["user_id"])){
     header("Location: login.php");
     exit();                
 }
?>
<div class="container mt-5">
    <div class="card p-4 align-items-center">
        <h2>Welcome, <?= htmlspecialchars($_SESSION["user_name"]) ?>!</h2>
        <p><strong>Email:</strong> <?= htmlspecialchars($_SESSION["user_email"] ?? "") ?></p>
        <div>
            <button type="button" class="btn btn-primary" style="width: 220px;">
                <a href="updateProfile.php" class="text-white text-decoration-none">Update Profile</a>
            </button>
            <button type="button" class="btn btn-primary" style="width: 220px;">
                <a href="updatePassword.php" class="text-white text-decoration-none">Update Password</a>
            </button>
        </div>
    </div>
</div>
<?php
include("footer.php");
?> 