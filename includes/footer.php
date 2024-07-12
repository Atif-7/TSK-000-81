<footer>
  <div class="container p-4">
    <div class="row">

      <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="../assets/images/logo.png" width="235px" alt="logo">
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
</body>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/main.js"></script>
<script>

  const slider = document.querySelector('.slider');
  const slides = document.querySelectorAll('.slide');

  let currentSlide = 0;

  document.querySelector('.slider-container').addEventListener('scroll', (e) =>{

    const scrollPosition = e.target.scrollLeft;
    const transform = translaleX(${ scrollPosition }px);

    slider.style.transform = transform;
  });

  setInterval(() => {
    const maxScrollWidth =slider.scrollWidth - slider.offsetWidth;
    const increment = 100;

    currentSlide += increment;

    if (currentSlide >= maxScrollWidth) {
      currentSlide = 0;
    }

    slider.style.transform = translateX(${currentSlide}px);
  }, 3000);

</script>
</html>