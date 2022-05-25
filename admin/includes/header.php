<div class="navbar navbar-default set-radius-zero" >
    <div class="container-fluid menu-section">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="dashboard.php">
                <img src="assets/img/logo.png"/>
            </a>
        </div>

        <div class="navbar-collapse collapse">
            <ul id="menu-top" class="nav navbar-nav">
                <li><a href="dashboard.php">DASHBOARD</a></li>
                        
                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Categories <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Add Category</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">Manage Categories</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Authors <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">Add Author</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-authors.php">Manage Authors</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Books <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Add Book</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Manage Books</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Issue Books <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Issue New Book</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">Manage Issued Books</a></li>
                    </ul>
                </li>

                <li><a href="reg-students.php">Reg Students</a></li>
                
                <li><a href="change-password.php">Change Password</a></li>
            
            </ul>

            <a href="logout.php" class="btn btn-primary pull-right"  onclick="return confirm('Are you sure you want to log out?');">Log Out</a>
            
        </div>
    </div>
</div>