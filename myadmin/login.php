<?php
if (!isset($_SESSION['admin_is_login'])) {
    if (isset($_REQUEST['login'])) {
        $username = trim($_REQUEST['Username']);
        $password = trim($_REQUEST['Password']);
        $sql = "SELECT * FROM `admin_login` WHERE username='$username' && password='$password'";
        $RESULT = $conn->query($sql);
        if ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
            $admin_username = $detialsfetch[0];
            $admin_password = $detialsfetch[1];
            $_SESSION['admin_is_login'] = true;
            $_SESSION['Admin_Name'] = $username;
            echo '<script>location.href="./";</script>';
            exit;
        } else {
            $e_msg = '<div class="alert alert-warning mt-3 text-center" role="alert" >Login Failed Try Again</div>';
        }
    }
} else {
    echo ' <script>location.href="/";</script>';
}

include("layoutAuthentication_header.php") ?>

<body class='bg-primary'>
    <div id='layoutAuthentication'>
        <div id='layoutAuthentication_content'>
            <main>
                <div class='container'>

                    <div class='row justify-content-center'>
                        <div class='col-lg-5'>
                            <div class='card shadow-lg border-0 rounded-lg mt-5'>
                                <div class='card-header'>
                                    <h3 class='text-center font-weight-light my-4'>Admin Login</h3>
                                </div>
                                <div class='card-body'>
                                    <form action="" method="post">
                                        <div class='form-group'><label class='small mb-1' for='inputEmailAddress'>Email</label><input class='form-control py-4' id='inputEmailAddress' type='text' placeholder='Enter email address' name="Username" required /></div>
                                        <div class='form-group'><label class='small mb-1' for='inputPassword'>Password</label><input class='form-control py-4' id='inputPassword' type='password' placeholder='Enter password' name="Password" required /></div>
                                        <div class='form-group'>
                                            <div class='custom-control custom-checkbox'><input class='custom-control-input' id='rememberPasswordCheck' type='checkbox' /><label class='custom-control-label' for='rememberPasswordCheck'>Remember password</label></div>
                                        </div>
                                        <div class='form-group d-flex align-items-center justify-content-between mt-4 mb-0'>
                                            <a class='small' href='password.php'>Forgot Password?</a>
                                            <button class="btn btn-outline-primary shadow-sm font-weight-bold " type="submit" name="login">Login</button>
                                        </div>
                                        <?php if (isset($e_msg)) {
                                            echo $e_msg;
                                        } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php include("layoutAuthentication_footer.php") ?>