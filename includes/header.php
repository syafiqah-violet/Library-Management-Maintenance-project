<div class="navbar navbar-default set-radius-zero" >
    <div class="container-fluid menu-section">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="dashboard.php">
                <img src="assets/img/logo.png" />
            </a>
        </div>

        <?php if($_SESSION['login'])
        {
        ?>    
        <div class="navbar-collapse collapse">
            <ul id="menu-top" class="nav navbar-nav">
                <li><a href="dashboard.php">DASHBOARD</a></li>
            
                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Account <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">My Profile</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">Change Password</a></li>
                    </ul>
                </li>

                <li><a href="issued-books.php">Issued Books</a></li>
            
            </ul>

            <a href="logout.php" class="btn btn-primary pull-right">LOG ME OUT</a>

        </div>

        <?php } else { ?>
        <div class="navbar-collapse collapse">
            <ul id="menu-top" class="nav navbar-nav">                        
                            
                <li><a href="adminlogin.php">Admin Login</a></li>
                <li><a href="signup.php">User Signup</a></li>
                <li><a href="index.php">User Login</a></li>
                            
            </ul>
        </div>
        <?php } ?>

    </div>
</div>




