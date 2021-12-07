<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Portfolio </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/index.css">
       



        
    </head>

    <body>

        <div id="nav-bar-container">

            <div id="nav-bar">

            <a href="index.php" class="header-links">                 
            
                <div class="link-container">

                   Home

                </div>

            </a>

            <a href="dashboard.php" class="header-links">                 
            
                <div class="link-container">

                   Dashboard

                </div>

            </a>
            
            <a href="login.php" class="header-links">                 
            
                <div class="link-container">

                   Log in

                </div>

            </a>

            <a href="signup.php" class="header-links">                 
            
                <div class="link-container">

                   Sign up

                </div>

            </a>

            <?php
            session_start();
            if ($_SESSION['username'] != '') {
                echo'<a href="logout.php" class="header-links">                 
                
                <div class="link-container">

                Log out

                </div>

                </a>';
            }
            ?>



                

            </div>

        </div>

    </body>

</html>