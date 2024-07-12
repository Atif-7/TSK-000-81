<?php require("config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/images/favicon.ico">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="padding-top: 25px; padding-bottom: 25px;">
        <div class="container-fluid">

            <a class="navbar-brand d-flex align-items-center" style="margin-right:11rem" href="../index.php">
                
                <img src="../assets/images/logo.png" width="200px" class="ms-4">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center mx-auto">

                    <li class="nav-item me-3">
                        <a class="nav-link" href="internships.php" style="font-weight: 600; color: #000; font-size:1.2rem">Internship</a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link" href="..pages/contact.php" style="font-weight: 600; color: #000; font-size:1.2rem">Company Collaborations</sup></a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link" href="contact.php" style="font-weight: 600; color: #000; font-size:1.2rem">Contact Us</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link btn p-3" 
                        style="background-color: var(--primary); font-size:1.1rem; font-weight: 600; color: var(--white); border-radius: 10rem; padding: 14px 30px !important" 
                        href="https://career.internee.pk/">Job Portal</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link btn p-3" 
                        style="background-color: var(--white); font-size:1.1rem; font-weight: 600; color: var(--primary); border-radius: 10rem; padding: 14px 30px !important; border: 2px solid var(--primary)" 
                        href="../admin/login.php">Internee's Login</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>