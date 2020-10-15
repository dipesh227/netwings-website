<?php
include('myadmin/connect.php');
$sql = "SELECT * FROM `theamdetials` WHERE `theamstetus`='active'";
$RESULT = $conn->query($sql);
if ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
    $theme_name = $detialsfetch[0];
    $theme_layout = $detialsfetch[1];
}
?>
<?php
include('./inc/css.php');
include('./inc/header.php');
include('./intro.php');
include('./main.php ');
include('./footer.php');
include('./inc/footer.php');

?>
