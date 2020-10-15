<?php
if (isset($_GET['id'])) {
    
}
else{
    echo '<script>location.href="./";</script>';
}
?>
<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>Add New User</li>
</ol>
<div id='layoutAuthentication'>
    <div id='layoutAuthentication_content'>
        <main>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-lg-7'>
                        <div class='card shadow-lg border-0 rounded-lg mt-5'>
                            <div class='card-header'>
                                <h3 class='text-center font-weight-light my-4'>Create Account</h3>
                            </div>
                            <div class='card-body'>
                                <form action="" method="post">
                                    <div class='form-row'>
                                        <div class='col-md-6'>
                                            <div class='form-group'><label class='small mb-1' for='inputFirstName'>First Name</label><input class='form-control py-4' id='inputFirstName' type='text' placeholder='Enter first name' name='fname' required /></div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'><label class='small mb-1' for='inputLastName'>Last Name</label><input class='form-control py-4' id='inputLastName' type='text' placeholder='Enter last name' name='lname' required /></div>
                                        </div>
                                    </div>
                                    <div class='form-group'><label class='small mb-1' for='inputEmailAddress'>Email</label><input class='form-control py-4' id='inputEmailAddress' type='email' aria-describedby='emailHelp' placeholder='Enter email address' name='email' required /></div>
                                    <div class='form-row'>
                                        <div class='col-md-6'>
                                            <div class='form-group'><label class='small mb-1' for='inputPassword'>Password</label><input class='form-control py-4' id='inputPassword' type='password' placeholder='Enter password' name='fname' required/></div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'><label class='small mb-1' for='inputConfirmPassword'>Confirm Password</label><input class='form-control py-4' id='inputConfirmPassword' type='password' placeholder='Confirm password' name='fname' required/></div>
                                        </div>
                                    </div>
                                    <div class='form-group mt-4 mb-0'>
                                    <button class="btn btn-outline-primary shadow-sm font-weight-bold btn-block" type="submit" name="addnew">Create New User</button>
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
</div>