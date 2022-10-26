<?php require 'dbh.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/color.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="remix-icon/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <title>ARJ | search</title>
</head>

<style>
    .logo {
        font-family: 'Sofia', cursive;
        font-size: 20px;
        color: #04daa8;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    header {
        width: 100%;
    }

    header .container {
        display: flex;
        justify-content: space-between;
    }

    .container>nav {
        background: none;
        width: 15%;
        min-width: 250px;
        border: none;
    }

    header a {
        display: inline-block;
        transform: translateY(.3em);
        color: rgba(3, 3, 3, 0.596);
        text-decoration: none;
        margin: 0 20px;
    }
</style>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <span>Annals Of Research Journals</span>
            </div>

            <nav>
                <a href="home.php">Journals</a>
                <a href="about.php">About</a>
            </nav>
        </div>

    </header>
    <div class="search-area">
        <div class="desc--text">
            <h3>Search For Publications</h3>
        </div>
        <div class="search--input">
            <form action="search.php" method="post">
                <input type="search" name="search" spellcheck="false" placeholder="Search using: author's name, title" required>
                <button name="search-submit" type="submit">search</button>
            </form>

        </div>


    </div>
    <div class="contents">
          <h2>search for an article</h2>
    </div>
    <footer>
        <hr>
        <div class="container">
            <div class="copyright">
                &copy;2021 all rights reserved
            </div>
            <div class="owner">
                Developed by <a href="https://www.pyvot360.org" target="_blank" rel="noreferrer" class="colored-text">Pyvot360</a>
            </div>
        </div>


    </footer>
</body>
<script src="js/reponsive.js"></script>
<script src="js/filter.js"></script>

</html>