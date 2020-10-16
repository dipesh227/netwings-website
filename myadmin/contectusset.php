<?php
if (isset($_REQUEST['donecontectus'])) {
    $contectusdoneid = $_REQUEST['doneid'];
    $doneq = "UPDATE `contectus` SET `stetus`='done' WHERE `id`='$contectusdoneid'";
    if ($RESULTD = $conn->exec($doneq)) {
        $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Read Successfully</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}
if (isset($_REQUEST['donencontectus'])) {
    $contectusdoneid = $_REQUEST['doneid'];
    $doneq = "UPDATE `contectus` SET `stetus`='notcheck' WHERE `id`='$contectusdoneid'";
    if ($RESULTD = $conn->exec($doneq)) {
        $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Unread Request Accepted</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}

?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>contectus</li>
</ol>
<main>
    <div class='container-fluide'>
        <div class='row justify-content-center'>
            <div class='col-lg-12'>
                <div class='card shadow-lg border-0 rounded-lg mb-5  '>
                    <div class="card-head">
                        <div class='col-md-12 border text-center jumbotron'>
                            <h1>Contect Us Section</h1>
                        </div>
                    </div>
                    <div class='card-body'>
                        <?php if (isset($u_msg)) {
                            echo $u_msg;
                        } ?>
                        <div class="table-responsive border p-3 mb-4">
                            <div class='col-md-12 border text-center jumbotron'>
                                <h1>New Messages</h1>
                            </div>
                            <table class="table text-center table-bordered table-striped " id="contectustb">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Make Read</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `contectus` WHERE `stetus`='notcheck'";
                                    $RESULT = $conn->query($sql);
                                    $id = 1;
                                    while ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                                        $contectusid = $detialsfetch['id'];
                                        $contectusname = $detialsfetch['name'];
                                        $contectusemail = $detialsfetch['email'];
                                        $contectussubject = $detialsfetch['subject'];
                                        $contectusemsg = $detialsfetch['msg'];
                                    ?>
                                        <tr class="align-middle">
                                            <th class="align-middle"><?php echo $id; ?></th>
                                            <td>
                                                <?php echo $contectusname; ?>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo $contectusemail; ?>"><?php echo $contectusemail; ?></a>
                                            </td>
                                            <td>
                                                <?php echo $contectussubject; ?>
                                            </td>
                                            <td>
                                                <?php echo $contectusemsg; ?>
                                            </td>
                                            <td class="align-middle">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="doneid" value="<?php echo $contectusid; ?>">
                                                    <input type="submit" class="btn btn-success" name="donecontectus" value="Make Read">
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
                    <!---------------------------------------------------------------------------_____________________________read message___________________________________ ---------------------------------------------------------------------------->
                    <div class='card-body'>
                        <div class="table-responsive border p-3 mb-4">
                            <div class='col-md-12 border text-center jumbotron'>
                                <h1>Read Messages</h1>
                            </div>
                            <table class="table text-center table-bordered table-striped " id="contectustb">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                        <th>Make Unread</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `contectus` WHERE `stetus`='done'";
                                    $RESULT = $conn->query($sql);
                                    $id = 1;
                                    while ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                                        $contectusid = $detialsfetch['id'];
                                        $contectusname = $detialsfetch['name'];
                                        $contectusemail = $detialsfetch['email'];
                                        $contectussubject = $detialsfetch['subject'];
                                        $contectusemsg = $detialsfetch['msg'];
                                    ?>
                                        <tr class="align-middle">
                                            <th class="align-middle"><?php echo $id; ?></th>
                                            <td>
                                                <?php echo $contectusname; ?>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo $contectusemail; ?>"><?php echo $contectusemail; ?></a>
                                            </td>
                                            <td>
                                                <?php echo $contectussubject; ?>
                                            </td>
                                            <td>
                                                <?php echo $contectusemsg; ?>
                                            </td>
                                            <td class="align-middle">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="doneid" value="<?php echo $contectusid; ?>">
                                                    <input type="submit" class="btn btn-success" name="donencontectus" value="Make Unread">
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