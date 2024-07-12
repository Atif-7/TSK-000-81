<?php require("includes/config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="padding-top: 25px; padding-bottom: 25px;">
        <div class="container-fluid">

            <a class="navbar-brand d-flex align-items-center" style="margin-right:11rem" href="index.php">
                
                <img src="assets/images/logo.png" width="200px" class="ms-4">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center mx-auto">

                    <li class="nav-item me-3">
                        <a class="nav-link" href="pages/internships.php" style="font-weight: 600; color: #000; font-size:1.2rem">Internship</a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link" href="#" style="font-weight: 600; color: #000; font-size:1.2rem">Company Collaborations</sup></a>
                    </li>

                    <li class="nav-item me-3">
                        <a class="nav-link" href="pages/contact.php" style="font-weight: 600; color: #000; font-size:1.2rem">Contact Us</a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link btn p-3" 
                        style="background-color: var(--primary); font-size:1.1rem; font-weight: 600; color: var(--white); border-radius: 10rem; padding: 14px 30px !important" 
                        href="https://career.internee.pk/">Job Portal</a>
                    </li>

                    <li class="nav-item ms-3">
                        <a class="nav-link btn p-3" 
                        style="background-color: var(--white); font-size:1.1rem; font-weight: 600; color: var(--primary); border-radius: 10rem; padding: 14px 30px !important; border: 2px solid var(--primary)" 
                        href="admin/login.php">Internee's Login</a>
                    </li>
                </ul>
            </div>    
        </div>
    </nav>

    <!-- Hero -->
    <section id="home" class="hero" style="padding-top:10px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div>
                        <h2 class="text-dark ms-4" style="font-size:3.5rem">Looking for your dream Internship?</h2>

                        <h2 class="hero-title mt-2 mb-5 ms-4" style="font-size:3.5rem; color:var(--primary)">On your desire domain</h2>
                        <p style="color: var(--gray); font-size: 1.3rem; width:87%" class="ms-4">Internee.pk kickstart student's tech careers with first internships, providing industry exposure, practical skills, and networking opportunities, paving the way for their success in the tech industry.</p>

                        <a href="pages/internships.php" style="color: var(--primary); border: 2px solid var(--primary);" class="button ms-4">Browse Internships</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-3">
                <div class="image-thumb">
                    <img src="assets/images/people-working-as-team-company.jpg" class="img-fluid" alt="">
                </div>
                </div>
            </div>
            <div class="text-center mt-5 col-lg-8" style="width:70%; margin: 0 auto">
                <img src="assets/images/1st-logo.jpg" style="width:70px; margin-top:4rem; margin-bottom:1.3rem">
                <h2 class="mb-3">Who is internee.pk?</h2>
                <p>The ultimate platform designed to turbocharge the IT sector in Pakistan! We recognize the immense potential of talented individuals in the country and aim to bridge the gap between them and the thriving IT industry. Internee.pk offers a comprehensive range of virtual internship opportunities exclusively in the IT field.</p>
                <h6 style="color:#444; margin-top:2rem">👇 Click Below and grab your internship now 👇</h6>
            </div>
        </div>
    </section>
        
    <!-- Internships -->
    <section id="internships">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <p style="width:92.8%"><b>Internships every months</b> Introducing Internee.pk, the ultimate platform designed to turbocharge the IT sector in Pakistan! We recognize the immense potential of talented individuals in the country and aim to bridge the gap between them and the thriving IT industry. Internee.pk offers a comprehensive range of virtual internship opportunities exclusively in the IT field.</p>
                </div>
            </div>
            <div class="row mt-5">
                <!--  Fetch Internships -->
                <?php

                $ref = "CALL Internships();";
                $check = mysqli_query($conn, $ref);

                if ($check) {
                    while ($row = mysqli_fetch_assoc($check)) { ?>

                        <div class="col-lg-4 mt-2">
                            <div class="card mb-5">
                                <img src="assets/internships/<?php echo $row["CoverImg"] ?>" alt="">
                                <div class="card-body">
                                    <h3 class="mb-3" style="color: var(--dark); font-size: 18px;"><?php echo $row["Category"] ?></h3>
                                    <hr style="color: var(--gray);">
                                    <div class="d-flex justify-content-end">
                                        <a href="sub-internship.php?id=<?php echo $row["Id"] ?>" class="btn" style="background-color:var(--primary)">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php }
                }

                ?>

            </div>
        </div>
    </section>

    <section class="bg-light">
        <div class="container">
            <p class="text-center fw-light text-dark m-0">Our Blog</p>
            <p class="text-center fs-3 fw-bold text-dark mb-5">Recent Blog</p>
            <div class="row mt-5 gx-4">
                <div class="col-lg-3">
                    <img src="assets/images/certificate.jpeg" class="image-fluid" width="100%">
                    <p class="fs-4 fw-bold text-dark mt-2">Complete all of the task but didn't get certification yet? 😓🤦‍♀️</p>
                    <p>
                    📧 Drop us a quick email at issues@internee.pk with the subject "Didn't get certification yet." Our team will swiftly resolve the matter, ensuring you get your recognition promptly.
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/images/mentor.jpeg" class="image-fluid" width="100%">
                    <p class="fs-4 fw-bold text-dark mt-2">🚀 Are you a tech expert looking to make a meaningful impact in the community?🌟🎉</p>
                    <p>
                    Our goal is to make Pakistan as an IT Hub. For this, we need more hands-on developers and tech enthusiast who will lift the Pakistan's IT export into the top👨‍💻. Your guidance and help may create a significant impact on some one's career. 🚀
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/images/comunity.jpeg" class="image-fluid" width="100%">
                    <p class="fs-4 fw-bold text-dark mt-2">🚀Calling communities to Empower Students, Collaborate with Internee.pk!✌</p>
                    <p>
                    We'd love to discuss how a collaboration with Internee.pk can benefit your universites , socities, institutes and educational institutions and specially with students.
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="assets/images/certification.png" class="image-fluid" width="100%">
                    <p class="fs-4 fw-bold text-dark mt-2">Ready to Showcase Your Expertise? Follow These Simple Steps! 🌟</p>
                    <p>
                    To complete the process, send us all the task details via email at careers@internee.pk. This ensures that we have all the necessary information to validate your certification.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>What Students are saying about internee.pk</h3>
                </div>
            </div>
            <div class="slider-container mt-5">
                <div class="slider">
                    <?php
                        
                        $dbh = new PDO('mysql:host=localhost;dbname=internee.pk', 'root', '');
                        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                        $sql = $dbh->prepare("SELECT * FROM tbl_reviews");
                        $sql->execute();
                        $result = $sql->fetchAll(PDO::FETCH_ASSOC);

                        foreach($result as $row){
                    ?>
                
                    <div class="slide">
                        <p><q><?php echo $row["feedback"] ?></q></p>
                        <div>
                            <h6><?php echo $row["Name"] ?></h6>
                            <span><?php echo $row["location"] ?></span>
                        </div>
                    </div>                   
                    <?php } ?>
                </div>
            </div>

        </div>
    </section>
    <!-- // Testimonials -->
         
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-6">
                <strong class="fs-4">
                    Safe and secure
                </strong>
                <ul>
                    <li>Powered by Microsoft Azure cloud technology.</li>
                    <li>Encrypted at rest and in transit.</li>
                    <li>Data resides in US-based data centers.</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <strong class="fs-4">
                    Free From Internship To Certification
                </strong>
                <ul>
                    <li>Profile Building & Optimization</li>
                    <li>Free Learning Management System</li>
                    <li>Hands on Tasks with Certification</li>
                </ul>
            </div>
        </div>
    </div>

    <footer>
    <div class="container p-4">
    <div class="row">

      <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="assets/images/logo.png" width="235px" alt="logo">
        </a>
      </div>

      <div class="col-lg-7" style="display:flex;">
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0 mt-3 ">
        <h6>Company</h6>

        <ul class="list-unstyled">
          <li>
            <a href="contact.php" >Contact Us</a>
          </li>
          <li>
            <a href="about.php" >Privacy Policy</a>
          </li>
          <li>
            <a href="#" >Terms and Conditions</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 mb-4 mb-md-0 mt-3">
        <h6>Get help</h6>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!">Training Videos</a>
          </li>
          <li>
            <a href="#!">Request Help</a>
          </li>
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0 mt-3">
        <h6>Socialize with us</h6>

        <ul class="list-unstyled social-icons" style="display:flex; ">
          <li>
            <a href="#!"><i class="bi bi-youtube fs-2 text-success"></i> </a>
          </li>
          <li>
            <a href="#!"><i class="bi bi-instagram fs-2 text-success"></i> </a>
          </li>
          <li>
            <a href="#!"><i class="bi bi-facebook fs-2 text-success"></i> </a>
          </li>
          <li>
            <a href="#!"><i class="bi bi-twitter fs-2 text-success"></i></a>
          </li>
        </ul>

        <ul class="list-unstyled mt-2 footer-text">
          <li>
            <p><i class="bi bi-telephone"></i> +923453191638</p>
          </li>
          <li>
            <p><i class="bi bi-envelope"></i> info@internee.pk</p>
          </li>
          <li>
            <p>Copyright ©2024 internee.pk Pvt Ltd.
            All rights reserved.</p>
          </li>
        </ul>
      </div>
      </div>
      

    </div>
  </div>

</footer>