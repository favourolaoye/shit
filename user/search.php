<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/search.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="remix-icon/remixicon.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
    <title>search page</title>
    <style>
          .logo {
        font-family: 'Sofia', cursive;
        font-size: 20px;
        color: #04daa8;
    }

    .container {
        padding: 20px;
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
        font-size: 20px;
    }
    </style>
</head>
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
    <h2>search page</h2>
<div class="contents">
<?php 

require "dbh.php";

if(isset($_POST['search-submit'])){


$search = mysqli_real_escape_string($conn, $_POST['search']);
$sql = "SELECT *  FROM article where title LIKE '%$search%' OR  author LIKE '%$search%'";
$result = mysqli_query($conn, $sql);
$QueryResult = mysqli_num_rows($result);

echo "There are ".$QueryResult." results!"; 
if($QueryResult > 0) {
    while ($row = mysqli_fetch_assoc($result)){
        echo 
        "<div class='publications'>
        <div class='first'>
        <h3> <a href='article.php?title=".$row['title']."&author=".$row['author']."'> " .$row['title']."</a></h3>
        <p class='detail'><span class='keep'>Article: </span>" .$row['refrence']."</p>
        <p class='author'><b>Author:</b> " .$row['author']."</p>
       </div><br/>
    </div>";
    
    }
}
else{
    echo "there are no results matching your search.";
}

}




?>
</div>
</body>
</html>


