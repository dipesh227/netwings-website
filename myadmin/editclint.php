<?php
if (isset($_REQUEST['editnew'])) {
    $id = $_REQUEST['editid'];
    $name = $_REQUEST['name'];
    $qulification = $_REQUEST['qulification'];
    $twitter = $_REQUEST['twitter'];
    $facebook = $_REQUEST['facebook'];
    $linkedin = $_REQUEST['linkedin'];
    if (isset($_FILES['teampic'])) {
        $teamimg = addslashes((file_get_contents($_FILES['teampic']['tmp_name'])));
        $themelogoinsertsql = "UPDATE `ourteams` SET `teampic`='$teamimg',`name`='$name',`qulification`='$qulification',`twitter`='$twitter',`facebook`='$facebook',`linkdin`='$linkedin' WHERE `id`='$id'";
        if ($RESULTD = $conn->exec($themelogoinsertsql)) {
            $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Update Successful</div>';
        } else {
            $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
        }
    } else {
        $themelogoinsertsql = "UPDATE `ourteams` SET `name`='$name',`qulification`='$qulification',`twitter`='$twitter',`facebook`='$facebook',`linkdin`='$linkedin' WHERE `id`='$id'";
        if ($RESULTD = $conn->exec($themelogoinsertsql)) {
            $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Update Successful</div>';
        } else {
            $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine 1</div>';
        }
    }
}
?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>Edit Team Member</li>
</ol>
<?php
$id = $_REQUEST['editid'];
$sql = "SELECT * FROM `ourteams` WHERE `id`='$id'";
$RESULT = $conn->query($sql);
if ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
    $teamname = $detialsfetch['name'];
    $teamqulification = $detialsfetch['qulification'];
    $teamtwitter = $detialsfetch['twitter'];
    $teamfacebook = $detialsfetch['facebook'];
    $teamlinkedin = $detialsfetch['linkdin'];
    $teamimg = $detialsfetch['teampic'];
} ?>
<main>
    <div class='container-fluide'>
        <div class='row justify-content-center'>
            <div class='col-lg-12'>
                <div class='card shadow-lg border-0 rounded-lg mb-5  '>
                    <div class="card-head">
                        <div class='col-md-12 border text-center jumbotron'>
                            <h1>Edit Team Member Section</h1>
                        </div>
                    </div>
                    <?php if (isset($u_msg)) {
                        echo $u_msg;
                    } ?>
                    <div class='card-body '>
                        <form action="" method="post" enctype="multipart/form-data" class="mb-4 border p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="file" id="teaminsertpic" class="form-control mb-4" name="teampic">
                                    <div id="newteampicdiv">
                                        <img class="shadow mb-4 img-fluid selectteam" id="selectteam" style="height: 240px; width:auto;" <?php echo 'src="data:image/jpeg;base64,' . base64_encode($teamimg) . '"'; ?> alt="">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <img class="shadow mb-4 img-fluid " style="height: 300px; width:auto;" <?php echo 'src="data:image/jpeg;base64,' . base64_encode($teamimg) . '"'; ?> alt="">
                                </div>
                            </div>
                            <input type="text" class="form-control mb-4" name="name" placeholder="Name" value="<?php echo $teamname; ?>" required>
                            <input type="text" class="form-control mb-4" name="qulification" value="<?php echo $teamqulification; ?>" placeholder="Expertness/Qulification" required>
                            <input type="text" class="form-control mb-4" name="twitter" value="<?php echo $teamtwitter; ?>" placeholder="Twitter Link" required>
                            <input type="text" class="form-control mb-4" name="facebook" value="<?php echo $teamfacebook; ?>" placeholder="Facebook Link" required>
                            <input type="text" class="form-control mb-4" name="linkedin" value="<?php echo $teamlinkedin; ?>" placeholder="Linkedin Link" required>
                            <input type="hidden" name="editid" value="<?php echo $id; ?>">
                            <button class="btn btn-primary btn-block" name="editnew">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    const impFile = document.getElementById("teaminsertpic");
    const previewCon = document.getElementById("newteampicdiv");
    const previewImage = previewCon.querySelector(".selectteam");
    impFile.addEventListener("change", function() {
        const file = this.files[0];
        console.log(file);
        if (file) {
            const reader = new FileReader();
            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
</script>