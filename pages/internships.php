<?php include('../includes/header.php'); ?>
    <main>

        <!-- Hero -->
        <section id="home" class="hero d-flex justify-content-center align-items-center">
            <div class="text-center" style="width:70%; margin: 0 auto">
                <img src="../assets/images/1st-logo.jpg" style="width:70px; margin-top:4rem; margin-bottom:1.3rem">
                <h2 class="mb-3">Who is internee.pk?</h2>
                <p>The ultimate platform designed to turbocharge the IT sector in Pakistan! We recognize the immense potential of talented individuals in the country and aim to bridge the gap between them and the thriving IT industry. Internee.pk offers a comprehensive range of virtual internship opportunities exclusively in the IT field.</p>
                <h6 style="color:#444; margin-top:2rem">👇 Click Below and grab your internship now 👇</h6>
            </div>
        </section>
        <!-- // Hero -->

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

                    $ref = "SELECT * FROM `internships` ORDER BY id DESC";
                    $check = mysqli_query($conn, $ref);

                    if ($check) {
                        while ($row = mysqli_fetch_assoc($check)) { ?>

                            <div class="col-lg-4 mt-2">
                                <div class="card mb-5">
                                    <img src="../assets/internships/<?php echo $row["CoverImg"] ?>" alt="">
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
        <!-- // Internships -->

        <!-- Testimonials -->
        <section class="testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2>What Students are saying about internee.pk</h2>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="slider-container">
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
            </div>
        </section>
        <!-- // Testimonials -->

        <!-- Footer -->
        <?php require("../includes/footer.php") ?>    
        <!-- // Footer -->

    </main>

    <!-- JS Scripting -->
    <script>
        jQuery(document).ready(function($) {
        $('#testimonial-slider').owlCarousel({
            loop: true,
            margin: 30,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                992: {
                    items: 3
                }
            }
        });
    });
    </script>

</body>
</html>