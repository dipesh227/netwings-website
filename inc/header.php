<?php
include('myadmin/connect.php');
$sql = "SELECT * FROM `theamdetials` WHERE `theamstetus`='active'";
$RESULT = $conn->query($sql);
if ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
    $theme_name = $detialsfetch[0];
    $theme_layout = $detialsfetch[1];
}
?>
<!-- ======= Header ======= -->
<header id="header">
  <div class="container-fluid">

    <div id="logo" class="pull-left">
      <a href="./" class="scrollto"><img <?php echo 'src="data:image/jpeg;base64,' . base64_encode($detialsfetch[3]) . '" ' ?> style="max-width:300px;" alt="" title=""></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a href="./">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#ourclients">Our Clients</a></li>
        <li><a href="#technologyies">Technologyies</a></li>
        <li><a href="#teams">Team</a></li>
        <li><a href="#learningnearn">Learning&Earning</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#faq">F.A.Q</a></li>
        <li><a href="#contact">Contact</a></li>
        <li class="buy-tickets"> <a type="button" class="btn" data-toggle="modal" data-target="#register-modal" data-ticket-type="premium-access">Register Now</a>
        </li>
      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- End Header -->