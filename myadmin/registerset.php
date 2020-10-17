<?php
if (isset($_REQUEST['doneregisterdata'])) {
    $registerdatadoneid = $_REQUEST['doneid'];
    $doneq = "UPDATE `registerdata` SET `stetus`='done' WHERE `id`='$registerdatadoneid'";
    if ($RESULTD = $conn->exec($doneq)) {
        $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Read Successfully</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}
if (isset($_REQUEST['donenregisterdata'])) {
    $registerdatadoneid = $_REQUEST['doneid'];
    $doneq = "UPDATE `registerdata` SET `stetus`='newregister' WHERE `id`='$registerdatadoneid'";
    if ($RESULTD = $conn->exec($doneq)) {
        $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Unread Request Accepted</div>';
    } else {
        $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
    }
}

?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>registerdata</li>
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
                            <table class="table text-center table-bordered table-striped " id="registerdatatb">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact no for Call</th>
                                        <th>WhatsApp No</th>
                                        <th>D.O.B</th>
                                        <th>Qualification</th>
                                        <th>Stream</th>
                                        <th>Technology For Upgrade</th>
                                        <th>Name Of College</th>
                                        <th>Location</th>
                                        <th>Future Targe</th>
                                        <th>Make Read</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `registerdata` WHERE `stetus`='newregister'";
                                    $RESULT = $conn->query($sql);
                                    $id = 1;
                                    while ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                                        $registerdataid = $detialsfetch['id'];
                                        $registerdataname = $detialsfetch['name'];
                                        $registerdataemail = $detialsfetch['email'];
                                        $registerdatasdob = $detialsfetch['dob'];
                                        $registerdataequali = $detialsfetch['quali'];
                                        $registerdataestrm = $detialsfetch['strm'];
                                        $registerdataecolname = $detialsfetch['colname'];
                                        $registerdataeloc = $detialsfetch['loc'];
                                        $registerdataecallcon = $detialsfetch['callcon'];
                                        $registerdataewhatsno = $detialsfetch['whatsno'];
                                        $registerdataefuturetrg = $detialsfetch['futuretrg'];
                                        $registerdataeintrsttech = $detialsfetch['intrsttech'];
                                    ?>
                                        <tr class="align-middle">
                                            <th class="align-middle"><?php echo $id; ?></th>
                                            <td>
                                                <?php echo $registerdataname; ?>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo $registerdataemail; ?>"><?php echo $registerdataemail; ?></a>
                                            </td>
                                            <td>
                                                <a href="tel:+91 <?php echo $registerdataecallcon; ?>">
                                                    <?php echo $registerdataecallcon; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="https://api.whatsapp.com/send?phone=91<?php echo $registerdataewhatsno; ?>&text=hello from netwingsinfotech&source=&data=&app_absent=" target="_blank">
                                                    <?php echo $registerdataewhatsno; ?>
                                                </a>
                                            </td>
                                            <td>
                                                <?php echo $registerdatasdob; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataequali; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataestrm; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataeintrsttech; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataecolname; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataeloc; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataefuturetrg; ?>
                                            </td>
                                            <td class="align-middle">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="doneid" value="<?php echo $registerdataid; ?>">
                                                    <input type="submit" class="btn btn-success" name="doneregisterdata" value="Make Read">
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
                            <table class="table text-center table-bordered table-striped " id="registerdatatb">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact no for Call</th>
                                        <th>WhatsApp No</th>
                                        <th>D.O.B</th>
                                        <th>Qualification</th>
                                        <th>Stream</th>
                                        <th>Technology For Upgrade</th>
                                        <th>Name Of College</th>
                                        <th>Location</th>
                                        <th>Future Targe</th>
                                        <th>Make Read</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM `registerdata` WHERE `stetus`='done'";
                                    $RESULT = $conn->query($sql);
                                    $id = 1;
                                    while ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
                                        $registerdataid = $detialsfetch['id'];
                                        $registerdataname = $detialsfetch['name'];
                                        $registerdataemail = $detialsfetch['email'];
                                        $registerdatasdob = $detialsfetch['dob'];
                                        $registerdataequali = $detialsfetch['quali'];
                                        $registerdataestrm = $detialsfetch['strm'];
                                        $registerdataecolname = $detialsfetch['colname'];
                                        $registerdataeloc = $detialsfetch['loc'];
                                        $registerdataecallcon = $detialsfetch['callcon'];
                                        $registerdataewhatsno = $detialsfetch['whatsno'];
                                        $registerdataefuturetrg = $detialsfetch['futuretrg'];
                                        $registerdataeintrsttech = $detialsfetch['intrsttech'];
                                    ?>
                                        <tr class="align-middle">
                                            <th class="align-middle"><?php echo $id; ?></th>
                                            <td>
                                                <?php echo $registerdataname; ?>
                                            </td>
                                            <td>
                                                <a href="mailto:<?php echo $registerdataemail; ?>"><?php echo $registerdataemail; ?></a>
                                            </td>
                                            <td>
                                                <?php echo $registerdataecallcon; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataewhatsno; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdatasdob; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataequali; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataestrm; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataeintrsttech; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataecolname; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataeloc; ?>
                                            </td>
                                            <td>
                                                <?php echo $registerdataefuturetrg; ?>
                                            </td>
                                            <td class="align-middle">
                                                <form action="" method="POST">
                                                    <input type="hidden" name="doneid" value="<?php echo $registerdataid; ?>">
                                                    <input type="submit" class="btn btn-success" name="donenregisterdata" value="Make Unread">
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