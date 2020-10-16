<!-- =======  F.A.Q Section ======= -->
<?php
if (isset($_REQUEST['addnew'])) {
  $qu = $_REQUEST['addans'];
  $insertfaq = "INSERT INTO `faq`(`qution`,`gotans`) VALUES ('$qu','notget')";
  if ($RESULTD = $conn->exec($insertfaq)) {
    $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Question Added Our Team Reply Soon Thanxs</div>';
  } else {
    $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
  }
}
?>
<section id="faq">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>F.A.Q </h2>
      <?php if (isset($u_msg)) {
        echo $u_msg;
      } ?>
    </div>
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-9">
        <ul id="faq-list">
          <?php
          $sql = "SELECT * FROM `faq` WHERE `gotans`='get'";
          $RESULT = $conn->query($sql);
          $id = 1;
          while ($qutionfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
            $faqid = $qutionfetch['id'];
            $faqqution = $qutionfetch['qution'];
            $faqans = $qutionfetch['ans'];
          ?>
            <li>
              <a data-toggle="collapse" class="collapsed" href="#faq<?php echo $id; ?>">
                <?php echo $faqqution; ?>
                <i class="fa fa-minus-circle"></i>
              </a>
              <div id="faq<?php echo $id; ?>" class="collapse" data-parent="#faq-list">
                <p>
                  <?php echo $faqans; ?>
                </p>
              </div>
            </li>
          <?php
            $id++;
          }
          ?>
        </ul>
        <form action="" method="POST" class="border p-5">
          <label for="addans" class=" mb-4 font-weight-bold">If you Have Any Doubts Ask Us 😊</label>
          <input type="text" class="form-control mb-4" name="addans" placeholder="Type your Question Here" required>
          <button class=" btn btn-primary btn-block" name="addnew">Add Your Question</button>
        </form>
      </div>
    </div>

  </div>

</section><!-- End  F.A.Q Section -->