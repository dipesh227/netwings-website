<?php
if (isset($_REQUEST['addfaq'])) {
    $addid = $_REQUEST['addid'];
    $addans = $_REQUEST['addans'];
    $themelogoinsertsql = "UPDATE `faq` SET `ans`='$addans',`gotans`='get' WHERE `id`='$addid'";
    if ($RESULTD = $conn->exec($themelogoinsertsql)) {
        $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Answer Added Added</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}
if (isset($_REQUEST['delfaq'])) {
    $faqdelid = $_REQUEST['delid'];
    $delq = "DELETE FROM `faq` WHERE `id`='$faqdelid'";
    if ($RESULTD = $conn->exec($delq)) {
        $u_msg = '<div class="alert alert-danger mt-2 text-center" role="alert" >Qutions Deleted</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}

?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>faq</li>
</ol>
<main>
    <div class='container-fluide'>
        <div class='row justify-content-center'>
            <div class='col-lg-12'>
                <div class='card shadow-lg border-0 rounded-lg mb-5  '>
                    <div class="card-head">
                        <div class='col-md-12 border text-center jumbotron'>
                            <h1>F.A.Q Section</h1>
                        </div>
                    </div>
                    <div class='card-body'>
                        <?php if (isset($u_msg)) {
                            echo $u_msg;
                        } ?>
                        <div class="table-responsive border p-3 mb-4">
                            <table class="table text-center table-bordered table-striped " id="faqtb">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Question</th>
                                        <th>Answer</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `faq`";
                                    $RESULT = $conn->query($sql);
                                    $id = 1;
                                    while ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                                        $faqid = $detialsfetch['id'];
                                        $faqqution = $detialsfetch['qution'];
                                        $faqans = $detialsfetch['ans'];
                                    ?>
                                        <tr class="align-middle">
                                            <th class="align-middle"><?php echo $id; ?></th>
                                            <td>
                                                <?php echo $faqqution; ?>
                                            </td>

                                            <td style="max-width: 500px;" class="align-middle">
                                                <?php
                                                if (isset($faqans)) {
                                                    echo $faqans;
                                                } else { ?>
                                                    <form action="" method="POST">
                                                        <input type="hidden" name="addid" value="<?php echo $faqid; ?>">
                                                        <input type="text" name="addans" class="form-control mb-4" placeholder="Add Ansewer Here">
                                                        <input type="submit" class="btn btn-success" name="addfaq" value="Add Ans">
                                                    </form>
                                                <?php
                                                }
                                                ?>
                                            </td>

                                            <td class="align-middle">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="delid" value="<?php echo $faqid; ?>">
                                                    <input type="submit" class="btn btn-danger" name="delfaq" value="Delete">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>