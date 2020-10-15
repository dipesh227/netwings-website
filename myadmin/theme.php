<ol class='breadcrumb mb-2 mt-2'>
    <li class='breadcrumb-item'><a href='./'>Dashboard</a></li>
    <li class='breadcrumb-item active'>Theme</li>
</ol>
<?php
$sql = "SELECT * FROM `theamdetials` WHERE `theamstetus`='active'";
$RESULT = $conn->query($sql);
if ($detialsfetch = $RESULT->fetch(PDO::FETCH_BOTH)) {
    $theme_name = $detialsfetch[0];
    $theme_layout = $detialsfetch[1];

    if (isset($_REQUEST['addnewlogo'])) {
        $themelogoinsert = addslashes((file_get_contents($_FILES['themelogoinsert']['tmp_name'])));
        $themelogoinsertsql = "UPDATE `theamdetials` SET `themelogo`='$themelogoinsert' WHERE `theme_name`='$theme_name'";
        if ($RESULTD = $conn->exec($themelogoinsertsql)) {
            $u_msg = '<div class="alert alert-success mt-2 text-center" role="alert" >Logo Change</div>';
        } else {
            $u_msg = '<div class="alert alert-warning mt-2 text-center" role="alert" >Sorry Something worng try agine</div>';
        }
    }
}
?>
<style>
    /* Style tab links */
    .tablink {
        background-color: #555;
        color: white;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        font-size: 17px;
        width: 25%;
    }

    .tablink:hover {
        background-color: #777;
    }

    /* Style the tab content (and add height:100% for full page content) */
    .tabcontent {

        display: none;
        padding: 100px 20px;
        height: 100%;
    }

    .coustom {
        width: 100%;
        height: auto;
    }

    .responsive-logo {
        background: black;
        height: 60px;
    }

    #themelogoinsert {
        height: 60px;
    }

    #updatelogo {
        height: 60px;
    }
</style>
<div class="coustom ">
    <button class="tablink" onclick="openPage('Header', this, 'skyblue')" id="defaultOpen">Header</button>
    <button class="tablink" onclick="openPage('News', this, 'skyblue')">News</button>
    <button class="tablink" onclick="openPage('Contact', this, 'skyblue')">Contact</button>
    <button class="tablink" onclick="openPage('About', this, 'skyblue')">About</button>
    <div id="Header" class="tabcontent">
        <main>
            <div class='container-fluide'>
                <div class='row justify-content-center'>
                    <div class='col-lg-12'>
                        <div class='card shadow-lg border-0 rounded-lg '>
                            <div class='card-body'>
                                <form action="" method="post" class="mb-4">
                                    <div class='form-row border'>
                                        <div class='col-md-12 border text-center jumbotron'>
                                            <h1>Theme Deials</h1>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='themename'>Theme Name</label>
                                                <input class='form-control py-4' id='themename' type='text' value="<?php echo $theme_name; ?>" name='themename' readonly required />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='themelayout'>Theme Layout</label>
                                                <input class='form-control py-4' id='themelayout' type='text' value="<?php echo $theme_layout; ?>" name='themelayout' readonly required /></div>
                                        </div>
                                    </div>
                                </form>
                                <form action="" method="post" enctype="multipart/form-data" class="mb-4">
                                    <div class='form-row border'>
                                        <div class='col-md-12 border text-center jumbotron'>
                                            <h1>Logo Section</h1>
                                        </div>
                                        <div class="col-md-6">
                                            <div class='form-group'>
                                                <label class='small mb-1' for='themelogoinsert'>Website Logo</label>
                                                <input class='form-control  ' id='themelogoinsert' type='file' name='themelogoinsert' required />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='CurentLogo'>Curent Logo</label>
                                                <?php echo '<img class="form-control responsive-logo" id="CurentLogo" src="data:image/jpeg;base64,' . base64_encode($detialsfetch[3]) . '" alt="">' ?>
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group' id="NewLogodiv">
                                                <label class='small mb-1' for='NewLogo'>New Logo</label>
                                                <img class="form-control responsive-logo imgclass" id="NewLogo" src="../assets/img/logo.png" alt="">
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group mt-4 mb-0'>
                                                <button class="btn btn-outline-primary shadow-sm font-weight-bold btn-block" type="submit" id="updatelogo" name="addnewlogo">Update logo</button>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (isset($u_msg)) {
                                        echo $u_msg;
                                    } ?>

                                </form>
                                <form action="" method="post">
                                    <div class='form-row border'>
                                        <div class='col-md-12 border text-center jumbotron'>
                                            <h1>Header Css</h1>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'><label class='small mb-1' for='inputfontstyle'>Font Style</label><input class='form-control py-4' id='inputfontstyle' type='text' name='inputfontstyle' /></div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputfontsize'>Font Size</label><input class='form-control py-4' id='inputfontsize' type='text' name='inputfontsize' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputFontweight'>Font Weight</label><input class='form-control py-4' id='inputFontweight' type='text' name='inputFontweight' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputbackground'>Back Ground</label><input class='form-control py-4' id='inputbackground' type='text' name='inputbackground' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputColor'>Color</label><input class='form-control py-4' id='inputColor' type='text' name='inputColor' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputhover'>Hover Color</label><input class='form-control py-4' id='inputhover' type='text' name='inputhover' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputborder'>Border color</label><input class='form-control py-4' id='inputborder' type='text' name='inputborder' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputmenuactive'>Menu Active Color</label><input class='form-control py-4' id='inputmenuactive' type='text' name='inputmenuactive' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputbuttoncolor'>Button Color</label><input class='form-control py-4' id='inputbuttoncolor' type='text' name='inputbuttoncolor' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputbuttoncolorbg'>Button BackGroung Color </label><input class='form-control py-4' id='inputbuttoncolorbg' type='text' name='inputbuttoncolorbg' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputbuttonfontsize'>Button Font Size</label><input class='form-control py-4' id='inputbuttonfontsize' type='text' name='inputbuttonfontsize' />
                                            </div>
                                        </div>
                                        <div class='col-md-6'>
                                            <div class='form-group'>
                                                <label class='small mb-1' for='inputbuttonfontWeight'>Button Weight Size</label><input class='form-control py-4' id='inputbuttonfontWeight' type='text' name='inputbuttonfontWeight' />
                                            </div>
                                        </div>
                                        <div class='form-group mt-4 mb-2 col-md-12'>
                                            <button class="btn btn-outline-primary shadow-sm font-weight-bold btn-block" type="submit" name="addnew">Create New User</button>
                                        </div>
                                        <?php if (isset($e_msg)) {
                                            echo $e_msg;
                                        } ?>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="News" class="tabcontent">
        <h3>News</h3>
        <p>Some news this fine day!</p>
    </div>
    <div id="Contact" class="tabcontent">
        <h3>Contact</h3>
        <p>Get in touch, or swing by for a cup of coffee.</p>
    </div>
    <div id="About" class="tabcontent">
        <h3>About</h3>
        <p>Who we are and what we do.</p>
    </div>
</div>
<script>
    const impFile = document.getElementById("themelogoinsert");
    const previewCon = document.getElementById("NewLogodiv");
    const previewImage = previewCon.querySelector(".imgclass");
    impFile.addEventListener("change", function() {
        const file = this.files[0];
        console.log(file);
        if (file) {
            const reader = new FileReader();
            reader.addEventListener("load", function() {
                previewImage.setAttribute("src", this.result);
            });
            reader.readAsDataURL(file);
        }
    });
    // tab js
    function openPage(pageName, elmnt, color) {
        // Hide all elements with class="tabcontent" by default */
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        // Remove the background color of all tablinks/buttons
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].style.backgroundColor = "";
        }
        // Show the specific tab content
        document.getElementById(pageName).style.display = "block";
        // Add the specific color to the button used to open the tab content
        elmnt.style.backgroundColor = color;
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>