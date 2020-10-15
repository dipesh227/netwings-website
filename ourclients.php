<!-- ======= ourclients Section ======= -->
<section id="ourclients" class="section-with-bg">

    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Our Clients</h2>
        </div>

        <div class="row no-gutters ourclients-wrap clearfix" data-aos="zoom-in" data-aos-delay="100">
            <?php
            $sql = "SELECT * FROM `ourclients`";
            $RESULT = $conn->query($sql);
            while ($clientsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {

                $clientimg = $clientsfetch['clientimg'];
            ?>
                <div class="col-lg-3 col-md-4 col-xs-6">
                    <div class="ourclient-logo">
                        <img <?php echo 'src="data:image/jpeg;base64,' . base64_encode($clientimg) . '"'; ?> class="img-fluid" alt="">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    </div>

</section><!-- End Sponsors Section -->