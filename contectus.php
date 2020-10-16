<!-- ======= Contact Section ======= -->
<?php
if (isset($_REQUEST['contectmsg'])) {
    $msgname = $_REQUEST['name'];
    $msgemail = $_REQUEST['email'];
    $msgsubject = $_REQUEST['subject'];
    $msgmessage = $_REQUEST['message'];
    $msgq = "INSERT INTO `contectus`(`name`, `subject`, `email`, `msg`, `stetus`) VALUES ('$msgname','$msgsubject','$msgemail','$msgmessage','notcheck')";
    if ($RESULTD = $conn->exec($msgq)) {
        $c_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Your Message Added. Our Team Reply Soon Thanxs</div>';
    } else {
        $c_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}
?>
<section id="contact" class="section-bg">

    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Contact Us</h2>
            <p>Feel Free To Contect Us Our Team Alweys Redy Talk to you 😊</p>
        </div>
        <?php if (isset($c_msg)) {
            echo $c_msg;
        } ?>
        <div class="border p-5">
            <div class="row contact-info ">
                <div class=" col-md-4">
                    <div class="contact-address">
                        <i class="ion-ios-location-outline"></i>
                        <h3>Address</h3>
                        <address>A - Block Sector-63 Noida</address>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+91 8743095779">+91 8743095779</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto: hr@netwingsinfotech.in"> hr@netwingsinfotech.in</a></p>
                    </div>
                </div>
            </div>
            <form action="" method="post">
                <div class="form-row">
                    <div class=" col-md-6 mb-4">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" />
                    </div>
                    <div class=" col-md-6 mb-4">
                        <input type="email" class="form-control" name="email" placeholder="Your Email" />
                    </div>
                </div>
                <input type="text" class="mb-4 form-control" name="subject" placeholder="Subject" />
                <textarea class="mb-4 form-control" name="message" placeholder="Message"></textarea>
                <div class="text-center"><button class="btn btn-success" type="submit" name="contectmsg">Send Message</button></div>
            </form>

        </div>
    </div>
</section><!-- End Contact Section -->