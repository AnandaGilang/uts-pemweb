<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Personal - Resume</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
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
        /* Custom canvas style */
        .chart-container {
            position: relative;
            margin: auto;
            height: 10vh; /* Height for horizontal charts */
            width: 70%; /* Width for better fit */
            margin-bottom: 20px; /* Space between charts */
        }
        /* Footer styles */
        footer {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }
        /* Column styles */
        .experience-col, .education-col {
            padding: 20px; /* Padding for inner spacing */
            border-radius: 10px; /* Rounded corners */
            background: rgba(255, 255, 255, 0.1); /* Light background for contrast */
            margin-bottom: 30px; /* Space between sections */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.3); /* Soft shadow for depth */
        }
        .experience-col h3, .education-col h3 {
            color: #f84e1e; /* Heading color */
        }
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .chart-container {
                width: 90%; /* Responsive width for smaller screens */
            }
        }
    </style>
</head>
<body class="d-flex flex-column h-100">

<?php
    include 'koneksi.php';

    $sqlProject = "SELECT * FROM pendidikan WHERE id = 1";
    $resultProject = $koneksi->query($sqlProject);

    $sqlProject2 = "SELECT * FROM pendidikan WHERE id = 2";
    $resultProject2 = $koneksi->query($sqlProject2);

    $koneksi->close();

    $resultServ = [];

    if ($resultProject->num_rows > 0) {
        $row = $resultProject->fetch_assoc();
        $id = $row['id'];
        $asal = $row['asal'];
        $isi = $row['isi'];
    } else {
        echo " ";
    }

    if ($resultProject2->num_rows > 0) {
        $row2 = $resultProject2->fetch_assoc();
        $id2 = $row2['id'];
        $asal2 = $row2['asal'];
        $isi2 = $row2['isi'];
    } else {
        echo " ";
    }
    ?>
    <main class="flex-shrink-0">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.php"><span class="fw-bolder text-primary">Lang.</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link active" href="resume.php">Resume</a></li>
                        <li class="nav-item"><a class="nav-link" href="projects.php">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="hobby.php">Hobbies</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Resume</span></h1>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-8">
                    <section>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h2 class="fw-bolder">Experience</h2>
                            <a class="btn btn-primary px-4 py-3" href="#!">
                                <div class="d-inline-block bi bi-download me-2"></div>
                                Download Resume
                            </a>
                        </div>
                        <div class="experience-col">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <h3 class="fw-bolder">Web Developer</h3>
                                    <div class="text-light mb-2">Bank BCA</div>
                                    <div class="small">2019 - 2022</div>
                                    <div class="small">Blok M, Jakarta Selatan</div>
                                </div>
                                <div class="col-lg-8">
                                    <div>In 2019, I worked as a web developer at Bank BCA in Jakarta, where I utilized my skills to enhance the bank's online services and improve user experience.</div>
                                </div>
                            </div>
                        </div>
                        <div class="experience-col">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <h3 class="fw-bolder">Backend Engineer</h3>
                                    <div class="text-light mb-2">Bank Arta Graha</div>
                                    <div class="small">2022 - 2024</div>
                                    <div class="small">Pamulang, Tangerang Selatan</div>
                                </div>
                                <div class="col-lg-8">
                                    <div>From 2022 to 2024, I worked as a backend team member at Bank Arta Graha, where I contributed to developing and optimizing the bank's server-side applications and ensuring the seamless integration of various systems.</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2 class="fw-bolder">Education</h2>
                        <div class="education-col">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <h3 class="fw-bolder"><?= $asal ?></h3>
                                    <div class="text-secondary mb-2">SENIOR HIGH SCHOOL</div>
                                    <div class="small">2016 - 2019</div>
                                </div>
                                <div class="col-lg-8">
                                    <div><?= $isi ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="education-col">
                            <div class="row align-items-center gx-5">
                                <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                    <h3 class="fw-bolder"><?= $asal2 ?></h3>
                                    <div class="text-secondary mb-2">JUNIOR HIGH SCHOOL</div>
                                    <div class="small">2013 - 2016</div>
                                </div>
                                <div class="col-lg-8">
                                    <div><?= $isi2 ?></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h2 class="fw-bolder">Skills</h2>
                        <div class="card mb-5">
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item bg-transparent border-0">Python</li>
                                            <li class="list-group-item bg-transparent border-0">Java</li>
                                            <li class="list-group-item bg-transparent border-0">JavaScript</li>
                                            <li class="list-group-item bg-transparent border-0">Data Analysis</li>
                                            <li class="list-group-item bg-transparent border-0">Web Technology</li>
                                            <li class="list-group-item bg-transparent border-0">Cloud Computing</li>
                                            <li class="list-group-item bg-transparent border-0">Database Management</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <footer class="bg-light py-4 mt-auto">
        <div class="container px-5"><div class="text-center small">Copyright &copy; Your Website 2024</div></div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
