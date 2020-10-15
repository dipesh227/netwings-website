<?php
if (isset($_REQUEST['addnew'])) {
    $teamimg = addslashes((file_get_contents($_FILES['teampic']['tmp_name'])));
    $name = $_REQUEST['name'];
    $qulification = $_REQUEST['qulification'];
    $twitter = $_REQUEST['twitter'];
    $facebook = $_REQUEST['facebook'];
    $linkedin = $_REQUEST['linkedin'];
    $themelogoinsertsql = "INSERT INTO `ourteams`(`teampic`, `name`, `qulification`, `twitter`, `facebook`, `linkdin`) VALUES ('$teamimg','$name','$qulification','$twitter','$facebook','$linkedin')";
    if ($RESULTD = $conn->exec($themelogoinsertsql)) {
        $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >New Image Added</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}
if (isset($_REQUEST['delteam'])) {
    $teamdelid = $_REQUEST['delid'];
    $delq = "DELETE FROM `ourteams` WHERE `id`='$teamdelid'";
    if ($RESULTD = $conn->exec($delq)) {
        $u_msg = '<div class="alert alert-danger mt-2 text-center" role="alert" >Image Deleted</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}

?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>Our Team</li>
</ol>
<main>
    <div class='container-fluide'>
        <div class='row justify-content-center'>
            <div class='col-lg-12'>
                <div class='card shadow-lg border-0 rounded-lg mb-5  '>
                    <div class='card-body '>
                        <div class='col-md-12 border text-center jumbotron'>
                            <h1>team Section</h1>
                        </div>
                        <?php if (isset($u_msg)) {
                            echo $u_msg;
                        } ?>
                        <div class="table-responsive border p-3 mb-4">
                            <table class="table text-center table-bordered table-striped " id="dataTable" style="width:100%;" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Expertness/Qulification</th>
                                        <th>Twitter</th>
                                        <th>Facebook</th>
                                        <th>Linkedin</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `ourteams`";
                                    $RESULT = $conn->query($sql);
                                    $id = 1;
                                    while ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                                        $teamid = $detialsfetch['id'];
                                        $teamname = $detialsfetch['name'];
                                        $teamqulification = $detialsfetch['qulification'];
                                        $teamtwitter = $detialsfetch['twitter'];
                                        $teamfacebook = $detialsfetch['facebook'];
                                        $teamlinkedin = $detialsfetch['linkdin'];
                                        $teamimg = $detialsfetch['teampic']; ?>
                                        <tr class="align-middle">
                                            <td class="align-middle"><?php echo $id; ?></td>
                                            <td><?php echo '<img class="rounded" style="height: 100px; width:auto" src="data:image/jpeg;base64,' . base64_encode($teamimg) . '" alt="">' ?></td>
                                            <td class="align-middle"><?php echo $teamname; ?></td>
                                            <td class="align-middle"><?php echo $teamqulification; ?></td>
                                            <td class="align-middle"><?php echo $teamtwitter; ?></td>
                                            <td class="align-middle"><?php echo $teamfacebook; ?></td>
                                            <td class="align-middle"><?php echo $teamlinkedin; ?></td>
                                            <td class="align-middle">
                                                <form action="./?id=edit" method="POST">
                                                    <input type="hidden" name="editid" value="<?php echo $teamid; ?>">
                                                    <input type="submit" class="btn btn-warning" name="editteam" value="Edit">
                                                </form>
                                            </td>
                                            <td class="align-middle">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="delid" value="<?php echo $teamid; ?>">
                                                    <input type="submit" class="btn btn-danger" name="delteam" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                        $id++;
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Expertness/Qulification</th>
                                        <th>Twitter</th>
                                        <th>Facebook</th>
                                        <th>Linkedin</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data" class="mb-4 border p-4">
                            <input type="file" class="form-control mb-4" name="teampic" required>
                            <input type="text" class="form-control mb-4" name="name" placeholder="Name" required>
                            <input type="text" class="form-control mb-4" name="qulification" placeholder="Expertness/Qulification" required>
                            <input type="text" class="form-control mb-4" name="twitter" placeholder="Twitter Link" required>
                            <input type="text" class="form-control mb-4" name="facebook" placeholder="Facebook Link" required>
                            <input type="text" class="form-control mb-4" name="linkedin" placeholder="Linkedin Link" required>
                            <button class="btn btn-primary btn-block" name="addnew">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>