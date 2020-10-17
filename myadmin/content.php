<?php
if (isset($_REQUEST['addnew'])) {
    $technologyiesimg = addslashes((file_get_contents($_FILES['technologyiespic']['tmp_name'])));
    $technologyiesimgname = $_FILES['technologyiespic']['name'];
    $themelogoinsertsql = "INSERT INTO `technologyies`( `name`, `imgdata`) VALUES ('$technologyiesimgname','$technologyiesimg')";
    if ($RESULTD = $conn->exec($themelogoinsertsql)) {
        $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >New Image Added</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}
if (isset($_REQUEST['deltechnologyies'])) {
    $technologyiesdelid = $_REQUEST['delid'];
    $delq = "DELETE FROM `technologyies` WHERE `id`='$technologyiesdelid'";
    if ($RESULTD = $conn->exec($delq)) {
        $u_msg = '<div class="alert alert-danger mt-2 text-center" role="alert" >Image Deleted</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}

?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>Technologyies</li>
</ol>
<main>
    <div class='container-fluide'>
        <div class='row justify-content-center'>
            <div class='col-lg-12'>
                <div class='card shadow-lg border-0 rounded-lg mb-5  '>
                    <div class="card-head">
                        <div class='col-md-12 border text-center jumbotron'>
                            <h1>Technologyies Section</h1>
                        </div>
                    </div>
                    <div class='card-body'>
                        <?php if (isset($u_msg)) {
                            echo $u_msg;
                        } ?>
                        <div class="table-responsive border p-3 mb-4">
                            <table class="table text-center table-bordered table-striped " id="technologyiestb">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `technologyies`";
                                    $RESULT = $conn->query($sql);
                                    $id = 1;
                                    while ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                                        $technologyiesid = $detialsfetch['id'];
                                        $technologyiesimg = $detialsfetch['imgdata']; ?>
                                        <tr class="align-middle">
                                            <th class="align-middle"><?php echo $id; ?></th>
                                            <td>
                                                <?php echo '<img class="rounded" style="height: 100px; width:auto" id="technologyiesimg" src="data:image/jpeg;base64,' . base64_encode($technologyiesimg) . '" alt="">' ?>
                                            </td>
                                            <td class="align-middle">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="delid" value="<?php echo $technologyiesid; ?>">
                                                    <input type="submit" class="btn btn-danger" name="deltechnologyies" value="Delete">
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                        $id++;
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                        <form action="" method="post" enctype="multipart/form-data" class="mb-4 border p-4">
                            <input type="file" class="form-control mb-4" name="technologyiespic">
                            <button class="btn btn-primary btn-block" name="addnew">Add New</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>