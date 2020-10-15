<?php
if ($_SESSION['admin_is_login']) {
} else {
    echo '<script>location.href="login.php";</script>';
}
?>
<div id='layoutSidenav_nav'>
    <nav class='sb-sidenav accordion sb-sidenav-dark' id='sidenavAccordion'>
        <div class='sb-sidenav-menu'>
            <div class='nav'>
                <div class='sb-sidenav-menu-heading'>Home</div>
                <a class='nav-link' href='./?id=dashboard'>
                    <div class='sb-nav-link-icon'><i class='fas fa-tachometer-alt'></i></div>
                    Dashboard
                </a>
                <div class='sb-sidenav-menu-heading'>Data Insert</div>
                <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseLayouts' aria-expanded='false' aria-controls='collapseLayouts'>
                    <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                    Layouts & Theme
                    <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                </a>
                <div class='collapse' id='collapseLayouts' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                    <nav class='sb-sidenav-menu-nested nav'>
                        <a class='nav-link' href='./?id=theme'>Theme Settings</a>
                        <a class='nav-link' href='./?id=layout'> <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div> Layout Settings</a></nav>
                </div>
                <a class='nav-link ' href='./?id=content'>
                    <div class='sb-nav-link-icon'><i class='fas fa-book-open'> </i></div>Content Setting
                </a>
                <a class='nav-link ' href='./?id=client'>
                    <div class='sb-nav-link-icon'><i class='far fa-address-card'> </i></div>Client Setting
                </a>
                <a class='nav-link ' href='./?id=team'>
                    <div class='sb-nav-link-icon'><i class='fas fa-user-friends'> </i></div>Team Setting
                </a>
                <a class='nav-link ' href='./?id=slider'>
                    <div class='sb-nav-link-icon'><i class='fas fa-book'> </i></div>Slider Settings
                </a>
                <a class='nav-link ' href='./?id=advertisement'>
                    <div class='sb-nav-link-icon'><i class='fas fa-ad'> </i></div>advertisement Setting
                </a>
                <div class='sb-sidenav-menu-heading'>Admin Settings</div>
                <a class='nav-link' href='./?id=changepass'>
                    <div class='sb-nav-link-icon'><i class='fas fa-key'></i></div>
                    Change Password
                </a><a class='nav-link' href='./?id=adduser'>
                    <div class='sb-nav-link-icon'>
                        <i class='fas Search ResultsWeb results fa-user-plus'></i>
                    </div>
                    Add User
                </a>
            </div>
        </div>
        <div class='sb-sidenav-footer'>
            <div class='small'>Logged in as -:
                <a class="text-danger">
                    <?php
                    if ($_SESSION['admin_is_login']) {
                        echo  $_SESSION['Admin_Name'];
                    } ?>
                </a>
            </div>
        </div>
    </nav>
</div>