    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Gallery</h2>
          <p>Check our gallery from the recent events</p>
        </div>
      </div>

      <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
        <?php
        $sql = "SELECT * FROM `gallery`";
        $RESULT = $conn->query($sql);
        $id = 1;
        while ($gallery = $RESULT->fetch(PDO::FETCH_BOTH)) {
          $galleryid = $gallery['id'];
          $galleryimg = $gallery['imgdata']; ?>
          <a  href=<?php echo'"data:image/jpeg;base64,' . base64_encode($galleryimg) . '"';?> class="venobox" data-gall="gallery-carousel"><img style="min-height: 200px; max-height:300px;" src=<?php echo'"data:image/jpeg;base64,' . base64_encode($galleryimg) . '"';?> alt=""></a>
        <?php } ?>
      </div>

    </section><!-- End Gallery Section -->