<!-- ======= Intro Section ======= -->
<section id="intro">
  <div class="intro-container" data-aos="zoom-in" data-aos-delay="80">
    <div class="h1 text-center text-danger">
      Welcome To Netwings Trainings
    </div>
    <!-- Carousel wrapper -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <?php
        $sql = "SELECT * FROM `slider`";
        $RESULT = $conn->query($sql);
        $active = "active";
        while ($sliderfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
          $sliderimg = $sliderfetch['imgdata'];
        ?>
          <!-- Single item -->
          <div class="carousel-item <?php echo $active ?>">
            <img <?php echo 'src="data:image/jpeg;base64,' . base64_encode($sliderimg) . '"'; ?> class="d-block min-vw-100" alt="..." />
            <div class="carousel-caption d-none d-md-block"></div>
          </div>
        <?php
          $active = "";
        }
        ?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
    <!-- Carousel wrapper -->
  </div>
</section><!-- End Intro Section -->