<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <header class="bg-light border-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-3">

                <!-- Logo -->
                <img src="images/logo.png" alt="Logo" width="80">

                <!-- Navigation -->
                <nav>
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link text-dark">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="about.php" class="nav-link text-dark">About Us</a>
                        </li>   
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link text-dark">Contact Us</a>
                        </li>
                    </ul>
                </nav>

                <div class="d-flex align-items-center gap-2">
                    <?php if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION["user_id"])): ?>
                        <a href="updatePassword.php" class="btn btn-outline-secondary btn-sm">Update Password</a>
                    <?php endif; ?>

                    <button type="button" class="btn btn-primary btn-sm">
                        <a href="logout.php" class="text-white text-decoration-none">Logout</a>
                    </button>
                </div>

            </div>
        </div>
    </header>