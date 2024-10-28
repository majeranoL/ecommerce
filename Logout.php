<?php 
    require_once("includes\header.php");
?>

    <!-- Navbar -->
    <?php require_once("includes\\navbar.php"); ?>

<?php
session_start();


if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_SESSION = [];
            session_destroy();
}

?>

    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card text-center shadow p-3" style="width: 24rem;">
            <div class="card-body">
                <h5 class="card-title">You have been logged out</h5>
                <p class="card-text">Thank you for visiting. You are now logged out.</p>
                <a href="/login.php" class="btn btn-primary">Go to Login</a>
            </div>
        </div>
    </div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 