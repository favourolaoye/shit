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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formII.css">
    <style>
        #third {
            display: none;
            visibility: hidden;
        }
    </style>
    <title>Admin - upload article</title>
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
                    <p><a href="Logout.php" referrerpolicy="no-referrer"><i class="fas fa-logout"></i>Logout</a></p>
                </div>
            </div>


        </div>
        <div class="content">
            <div class="container">
                <h3>Add Article</h3>

                <form action="upload.inc.php" method="POST" id="first" enctype="multipart/form-data" class="fromI">
                    <input type="text" name="title" id="" placeholder="title" required>
                    <input type="text" name="author" id="" placeholder="authors" required>
                    <input type="text" name="ref" id="" placeholder="Refrences" required>
                    <input type="date" name="datein" id="" required>

                    <textarea name="preface" id="" cols="30" rows="10" required></textarea>
                    <div class="btn">
                        <button id="toggle" name="article" type="submit">Next</button>
                    </div>
            </div>
            </form>

            <form action="file.inc.php" id="third" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" id="" required>
                <button name="file-btn" id="">upload</button>
            </form>
        </div>
    </div>
    <!-- //   <div id="first">This is the FIRST div</div>
//   <div id="second">This is the SECOND div</div>
//   <div id="third">This is the THIRD div</div>
//   <button id="toggle">Hide THIRD div</button> -->

    <script>
        const targetDiv = document.getElementById("third");
        const btn = document.getElementById("toggle");
        const actual = document.getElementById("first");

        btn.onclick = function() {
            if (targetDiv.style.display !== "block") {
                targetDiv.style.display = "block";
            } else if(targetDiv.style.display == "block"){
                targetDiv.style.display = "none";
            }
        };
    </script>
</body>

</html>