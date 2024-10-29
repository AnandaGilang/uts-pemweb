<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>My Hobbies</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <style>
        /* Custom styles for gradient background */
        body {
            background: linear-gradient(to bottom, #1a1a2e, #16213e); /* Dark gradient background */
            color: #eaeaea; /* Light text color for visibility */
            font-family: 'Plus Jakarta Sans', sans-serif; /* Set font */
        }
        /* Navbar styles */
        nav {
            background: rgba(255, 255, 255, 0.9); /* Lighter navbar background */
            backdrop-filter: blur(10px);
        }
        nav .nav-link {
            color: #16213e; /* Dark link color */
        }
        nav .nav-link:hover {
            color: #f84e1e; /* Bright hover color */
        }
        /* Card styles */
        .card {
            background: linear-gradient(to bottom right, #f84e1e, #ff5e62); /* Gradient for cards */
            border: none; /* Remove border */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
            border-radius: 12px; /* Rounded corners */
        }
        /* Header styles */
        header {
            color: #f84e1e; /* Bright header color */
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

<?php
include 'koneksi.php'; // Ensure this file connects to your database

// Query to get hobbies
$sqlProject = "SELECT * FROM hobby";
$resultProject = $koneksi->query($sqlProject);

if ($resultProject->num_rows > 0) {
    $row = $resultProject->fetch_assoc();
    $id = $row['id'];
    $judul = $row['judul'];
    $isi = $row['isi'];
} else {
    echo " ";
}

$koneksi->close();
?>

<main class="flex-shrink-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
        <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Lang.</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                    <li class="nav-item"><a class="nav-link active" href="hobby.php">Hobbies</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="py-5">
        <div class="container px-5">
            <h1 class="text-gradient d-inline">My Hobbies</h1>
            <p class="text-uppercase">Here are some of my hobbies:</p>
        </div>
    </header>

    <div class="container px-5">
        <div class="row">
            <div class="col-md-8 mb-4"> <!-- Adjusted column for text -->
                <div class="card">
                    <div class="col text-center text-lg-start mb-4 mb-lg-0">
                        <h5 class="text-gradient d-inline"><?= $judul ?></h5>
                        <p class="card-text"><?= $isi ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4"> <!-- Column for image -->
                <div class="card">
                    <img src="assets/tinju.jpeg" class="card-img-top" alt="<?= $judul ?>" /> <!-- Image tag on the right -->
                </div>
            </div>
        </div>
    </div>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
