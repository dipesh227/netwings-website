<?php
session_start();
include("connect.php");
if ($_SESSION['admin_is_login']) {
    if ($_SESSION['admin_is_login'] == true) {
        $sellerphone = $_SESSION['Admin_Name'];
    } else {
        echo ' <script>location.href="login.php";</script>';
    }
} else {
    echo ' <script>location.href="login.php";</script>';
}
include("header.php");
include("navbar.php");
?>

<div id='layoutSidenav'>
    <?php include("sidebar.php"); ?>
    <div id='layoutSidenav_content'>
        <main>
            <div class='container-fluid'>
                <?php
                
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    switch ($id) {
                        case 'dashboard':
                            include('dashboard.php');
                            break;
                        case 'changepass':
                            include('password.php');
                            break;
                        case 'adduser':
                            include('register.php');
                            break;
                        case 'theme':
                            include('theme.php');
                            break;
                        case 'layout':
                            include('layout.php');
                            break;
                        case 'content':
                            include('content.php');
                            break;
                        case 'slider':
                            include('slider.php');
                            break;
                        case 'advertisement':
                            include('advertisement.php');
                            break;
                        case 'client':
                            include('ourclients.php');
                            break;
                        case 'team':
                            include('team.php');
                            break;
                        case 'edit':
                            include('editclint.php');
                            break;
                        default:
                            include('dashboard.php');
                            break;
                    }
                } else {
                    include('dashboard.php');
                }
                ?>
            </div>
        </main>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js' crossorigin='anonymous'></script>
<script src='js/scripts.js'></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    $(document).ready(function() {
        $('#clienttb').DataTable();
    });
    $(document).ready(function() {
        $('#slidertb').DataTable();
    });
</script>
</body>

</html>