<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contact Us - Modern Business</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
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
        /* Section headings */
        h1 {
            color: #f84e1e; /* Main heading color */
        }
        .lead {
            color: #eaeaea; /* Lead text color */
        }
        /* Contact form styles */
        .form-container {
            background: #f8f9fa; /* Light background for form */
            border-radius: 12px; /* Rounded corners */
            padding: 40px; /* Add padding */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow effect */
            max-width: 500px; /* Set maximum width */
            margin: auto; /* Center the form container */
        }
        .form-control {
            border-radius: 8px; /* Rounded corners for input fields */
        }
        /* Button styles */
        .btn-primary {
            border-radius: 8px; /* Rounded corners for buttons */
        }
        /* Footer styles */
        footer {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
<?php
// Menyertakan koneksi ke database
include 'koneksi.php';

// Memeriksa apakah data dikirim melalui POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Menyiapkan dan menjalankan query untuk menyimpan data
    $sql = "INSERT INTO contact (name, email, phone, message) VALUES ('$name', '$email', '$phone', '$message')";

    if ($koneksi->query($sql) === TRUE) {
        echo "<div style='color: green; text-align: center;'>Message sent successfully!</div>";
    } else {
        echo "<div style='color: red; text-align: center;'>Error: " . $sql . "<br>" . $koneksi->error . "</div>";
    }

    // Menutup koneksi
    $koneksi->close();
}
?>
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Lang.</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="resume.php">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                        <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="hobby.php">Hobbies</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="form-container">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Get in Touch</h1>
                        <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                    </div>
                    <form id="contactForm" action="contact.php" method="POST">
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="name" type="text" placeholder="Enter your name..." required />
                            <label for="name">Full name</label>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="email" type="email" placeholder="name@example.com" required />
                            <label for="email">Email address</label>
                        </div>
                        <!-- Judul input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" name="phone" type="text" placeholder="Enter the subject..." required />
                            <label for="judul">Subject</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="message" placeholder="Enter your message here..." style="height: 10rem" required></textarea>
                            <label for="message">Message</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto"><div class="small m-0">Copyright &copy; Your Website 2023</div></div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
