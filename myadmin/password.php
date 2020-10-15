<?php
if (isset($_GET['id'])) {
} else {
    echo '<script>location.href="index.php";</script>';
}
?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>Change Password</li>
</ol>
<div id='layoutAuthentication'>
    <div id='layoutAuthentication_content'>
        <main>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-lg-5'>
                        <div class='card shadow-lg border-0 rounded-lg mt-5'>
                            <div class='card-header'>
                                <h3 class='text-center font-weight-light my-4'>Password Recovery</h3>
                            </div>
                            <div class='card-body'>
                                <div class='small mb-3 text-muted'>
                                    Enter your email address and we will send you a link to reset your password.
                                </div>
                                <form>
                                    <div class='form-group'>
                                        <label class='small mb-1' for='inputEmailAddress'>Email</label>
                                        <input class='form-control py-4' id='inputEmailAddress' type='email' aria-describedby='emailHelp' placeholder='Enter email address' />
                                    </div>
                                    <div class='form-group d-flex align-items-center justify-content-center mt-4 mb-0 '>
                                        <a class='btn btn-primary text-center' href='login.php'>Reset Password</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>