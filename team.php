<!-- ======= team Section ======= -->
<section id="teams">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Our team</h2>
            <p>Here are some of our team Members</p>
        </div>

        <div class="row">
            <?php
            $sql = "SELECT * FROM `ourteams`";
            $RESULT = $conn->query($sql);
            $id = 1;
            while ($ourteamfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                $teamid = $ourteamfetch['id'];
                $teamname = $ourteamfetch['name'];
                $teamqulification = $ourteamfetch['qulification'];
                $teamtwitter = $ourteamfetch['twitter'];
                $teamfacebook = $ourteamfetch['facebook'];
                $teamlinkedin = $ourteamfetch['linkdin'];
                $teamimg = $ourteamfetch['teampic']; ?>
                <div class="col-lg-4 col-md-6">
                    <div class="team shadow" data-aos="fade-up" data-aos-delay="100">
                        <img <?php echo 'src="data:image/jpeg;base64,' . base64_encode($teamimg) . '"';?> style="min-height: 280px; max-height:280px; width:100%;" alt="team 1" class="img-fluid">
                        <div class="details">
                            <h3><a href="<?php echo $teamlinkedin;?>"><?php echo $teamname;?></a></h3>
                            <p><?php echo $teamqulification; ?></p>
                            <div class="social text-center">
                                <a href="<?php echo $teamtwitter;?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?php echo $teamfacebook;?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?php echo $teamlinkedin;?>"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</section><!-- End team Section -->