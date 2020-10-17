<style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
<!-- Modal Order Form -->
<div id="register-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Register Now</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" name="your-name" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="your-email" placeholder="Email Id" required>
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="your-dob" placeholder="Your Date of Birth" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="your-Qualification" placeholder="Qualification" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="your-Stream" placeholder="Stream" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="your-techlearn" placeholder="Technology For Upgrade" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="your-College" placeholder="Name Of College" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="your-Location" placeholder="Location" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="your-callno" placeholder="Contact no for Call" required>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="your-whatsapp" placeholder="WhatsApp No" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="Future-Targe" placeholder="Future Targe" required>
                    </div>
                    <hr>
                    <div class="text-center">
                        <input type="submit" class="form-control btn btn-success btn-block mb-2" name="registernow" value="Register Now">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php
if (isset($_REQUEST['registernow'])) {
    $yourname = $_REQUEST['your-name'];
    $youremail = $_REQUEST['your-email'];
    $yourdob = $_REQUEST['your-dob'];
    $yourQualification = $_REQUEST['your-Qualification'];
    $yourStream = $_REQUEST['your-Stream'];
    $yourtechlearn = $_REQUEST['your-techlearn'];
    $yourCollege = $_REQUEST['your-College'];
    $yourLocation = $_REQUEST['your-Location'];
    $yourcallno = $_REQUEST['your-callno'];
    $yourwhatsapp = $_REQUEST['your-whatsapp'];
    $FutureTarg = $_REQUEST['Future-Targe'];
    $insert = "INSERT INTO `registerdata`(`name`, `email`, `dob`, `quali`, `strm`, `colname`, `loc`, `callcon`, `whatsno`, `futuretrg`, `intrsttech`,`stetus`) VALUES ('$yourname','$youremail','$yourdob','$yourQualification','$yourStream','$yourCollege','$yourLocation','$yourcallno','$yourwhatsapp','$FutureTarg','$yourtechlearn','newregister')";
    $RESULT = $conn->query($insert);
    if (isset($RESULT)) { ?>
        <script>
            swal("Congrats!", "You Regisetred Successgully Our Team Contect You Soon", "success");
        </script>
    <?php
    } else {
    ?>
        <script>
            swal("Fill All Filds", "Something Went wrong plese Try Again And send Message on contectus form and maile", "error");
        </script>
<?php
    }
} ?>