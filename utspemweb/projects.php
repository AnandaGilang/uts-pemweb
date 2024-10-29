<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Business - Start Bootstrap Template</title>
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
        /* Custom styles for cards */
        .card {
            background: linear-gradient(to bottom right, #f84e1e, #ff5e62); /* Gradient for cards */
            border: none; /* Remove border */
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); /* Soft shadow for depth */
            border-radius: 12px; /* Rounded corners */
            transition: transform 0.3s; /* Smooth hover effect */
        }
        .card:hover {
            transform: translateY(-5px); /* Lift effect on hover */
        }
        /* Section headings */
        h2 {
            border-bottom: 2px solid #f84e1e; /* Section heading color */
            padding-bottom: 10px;
            margin-bottom: 20px;
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
    include 'koneksi.php';

    $sqlProject = "SELECT * FROM project WHERE id = 1";
    $resultProject = $koneksi->query($sqlProject);

    $sqlProject2 = "SELECT * FROM project WHERE id = 2";
    $resultProject2 = $koneksi->query($sqlProject2);

    $koneksi->close();

    $resultServ = [];

    if ($resultProject->num_rows > 0) {
        $row = $resultProject->fetch_assoc();
        $id = $row['id'];
        $judul = $row['judul'];
        $isi = $row['isi'];
    } else {
        echo " ";
    }

    if ($resultProject2->num_rows > 0) {
        $row2 = $resultProject2->fetch_assoc();
        $id2 = $row2['id'];
        $judul2 = $row2['judul'];
        $isi2 = $row2['isi'];
    } else {
        echo " ";
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
                        <li class="nav-item"><a class="nav-link active" href="projects.php">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="hobby.php">Hobbies</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Projects Section-->
        <section class="py-5">
            <div class="container px-5 mb-5">
                <div class="text-center mb-5">
                    <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Projects</span></h1>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-11 col-xl-9 col-xxl-8">
                        <!-- Project Card 1-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder"><?= $judul ?></h2>
                                        <p><?= $isi ?></p>
                                    </div>
                                    <img class="img-fluid" src="assets/project1.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                        <!-- Project Card 2-->
                        <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                            <div class="card-body p-0">
                                <div class="d-flex align-items-center">
                                    <div class="p-5">
                                        <h2 class="fw-bolder"><?= $judul2 ?></h2>
                                        <p><?= $isi2 ?></p>
                                    </div>
                                    <img class="img-fluid" src="assets/project2.jpg" alt="..." />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call to action section-->
        <section class="py-5 bg-gradient-primary-to-secondary text-white">
            <div class="container px-5 my-5">
                <div class="text-center">
                    <h2 class="display-4 fw-bolder mb-4">Let's build something together</h2>
                    <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.php">Contact me</a>
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
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</html>
