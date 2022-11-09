<header class="main-header">
    <nav class="navbar navbar-static-top" style="color:#47b2e4; background-color:#212529;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
">
        <div class="container">
            <div class="navbar-header" style="color:#47b2e4;">
                <a href="#" class="navbar-brand" style="color:#47b2e4;font-weight:700;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
"><b> Online Voting </b>System</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <?php
            if(isset($_SESSION['student'])){
              echo "
                <li><a href='index.php'>HOME</a></li>
                <li><a href='transaction.php'>TRANSACTION</a></li>
              ";
            } 
          ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="user user-menu">
                        <a href="">
                            <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>"
                                class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $voter['fullname']; ?></span>
                        </a>
                    </li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a></li>
                </ul>
            </div>
            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>