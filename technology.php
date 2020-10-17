    <!-- ======= technologyies Section ======= -->
    <section id="technologyies" >
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>technologyies</h2>
                <p>Check our technologyies from the recent events</p>
            </div>
        </div>

        <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
            <?php
            $sql = "SELECT * FROM `technologyies`";
            $RESULT = $conn->query($sql);
            $id = 1;
            while ($technologyies = $RESULT->fetch(PDO::FETCH_BOTH)) {
                $technologyiesid = $technologyies['id'];
                $technologyiesimg = $technologyies['imgdata']; ?>
                <a href=<?php echo '"data:image/jpeg;base64,' . base64_encode($technologyiesimg) . '"'; ?> class="venobox" data-gall="gallery-carousel"><img style="min-height: 200px; max-height:300px;" src=<?php echo '"data:image/jpeg;base64,' . base64_encode($technologyiesimg) . '"'; ?> alt=""></a>
            <?php } ?>
        </div>

    </section><!-- End technologyies Section -->