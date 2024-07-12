<?php require("../includes/header.php") ?>    
    <!-- // Navbar -->

   <main>
      <!-- Contact Content -->
      <header class="container my-5 mt-5">
         <div class="row d-flex justify-content-center mt-5">
            <div class="col-lg-8 mt-5">
               <p class="mt-5 text-dark fw-light">7k+ Internship Provided</p>
               <p class="fs-6 mb-5">
               Internee.pk has successfully facilitated over 7,000 internship opportunities for students and professionals alike! This milestone reflects our commitment to empowering individuals with valuable hands-on experience and career-building opportunities
               </p>
               <p class="fw-light text-dark">15k+ Linkedin Family</p>
               <p class="fs-6 mb-5">
               Our LinkedIn community has surpassed 15,000 members, comprising professionals like yourself who are driving innovation and growth in their respective industries
               </p>
               <p class="text-dark fw-light">7k+ Internship Provided</p>
               <p class="fs-6 mb-5">
               Our LMS provides the perfect platform for growth and development. With interactive lessons, practical exercises, and expert-led instruction, you'll gain the insights and capabilities you need to excel in today's competitive landscape
               </p>
               <p class="text-dark fw-light">15 Companies Onboarded</p>
               <p class="fs-6 mb-5">
               we are expanding our network and creating new avenues for talent acquisition and career growth. Whether you're a student looking for valuable internships or a business seeking top-tier candidates, our platform provides the perfect space to connect, collaborate, and succeed together
               </p>
            </div>

            <div class="container px-5 py-5 mb-5">
               <div class="row flex-row align-content-center">
                  <div class="col-lg-6 py-3 animate__animated animate__fadeInDown animate__delay-1s" data-aos="fade-down"
                     data-aos-duration="1000" style="position: relative;">
                     <div style="overflow: hidden;">
                        <iframe
                           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d924244.0619641689!2d66.59499551729773!3d25.192146526892635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33e06651d4bbf%3A0x9cf92f44555a0c23!2sKarachi%2C%20Karachi%20City%2C%20Sindh!5e0!3m2!1sen!2s!4v1690560441133!5m2!1sen!2s"
                           width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                           referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>

                  <div class="col-lg-5">
                     <div class="text-left">
                        <form class="row g-5 ms-5 mb-5" method="POST">
                           <div class="col-lg-12">
                              <legend>Project in mind? Let’s Talk 🚀</legend>
                              <label for="validationDefault01" class="form-label py-2 fw-bold"> Email</label>
                              <input type="text" class="form-control mb-3 p-2 bg-light" id="validationDefault01"
                                 style="color: #979696;" required name="email">
                              <label for="validationDefault01" class="form-label py-2 fw-bold"> Phone</label>
                              <input type="text" class="form-control mb-3 p-2 bg-light" id="validationDefault01" required name="phone">
                           
                              <label for="validationDefault07" class="form-label fw-bold py-2 fw-light">Message</label>
                              <textarea class="form-control h-50 bg-light" style="resize:none" required name="msg"></textarea>
                              <center style="margin-bottom:5rem !important">
                              <input class="mt-3 btn btn-success" type="submit" style="width:100%;" name="SendMsg" value="Send">
                              </center>
                           </div>
                        </form>
                        <!-- ...Php  -->
                        <?php
                        if(isset($_POST["SendMsg"]))
                        {
                           $email = $_POST["email"];
                           $phone = $_POST["phone"];
                           $message = $_POST["msg"];

                           $query = "INSERT INTO `tbl_contact` (`email`, `phone`, `message`) 
                           VALUES ('$email','$phone','$message')";
                           $result = mysqli_query($conn, $query);

                           if($result) {
                              echo '<script>alert("Message Sent ✔")</script>';
                           } else {
                              echo '<script>alert("sending failed")</script>';
                           }
                        }
                        ?>
                        <!-- ...Php  -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
        <!-- // Contact Content -->
   </main>
        <!-- Footer -->
      <?php require("../includes/footer.php") ?>    
        <!-- // Footer -->

   