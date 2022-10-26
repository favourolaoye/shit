<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.php');
	exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="addup.css">
    <title>admin - addnew</title>
</head>

<body>
    <div class="wrapper">

        <div class="sidebar">
            <div class="wrap">
                <div class="title">
                    <h3>Annals Of Research</h3>
                </div>
                <div class="links">
                    <ul>
                        <li><a href="dashboard.php"><i class="fas fa-list"></i>Dashboard</a></li>
                        <li><a href="onboarding.php"><i class="fas fa-list"></i>Add article</a></li>
                        <li><a href="addnew.php"><i class="fas fa-user"></i>New admin</a></li>

                    </ul>
                </div>

                <div class="footer">
                    <p><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></p>
                </div>
            </div>

        </div>
        <div class="content">
            <div class="container">
                <h3>Add admin</h3>
                <form action="signup.inc.php" method="POST">
                    <input type="text" name="uid" id="" placeholder="usernane">
                    <input type="text" name="pwd" id="" placeholder="password">
                    <input type="text" name="pwd-repeat" id="" placeholder="confirm password">
                   
                    <div class="btn">
                        <button name="addnew-btn" type="submit">upload</button>
                    </div>
            </div>  
            </form>
          
        
                
        </div>
    </div>
</body>

</html>