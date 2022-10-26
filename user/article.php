<?php include "dbh.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ARJ</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/article.css">
    <link rel="stylesheet" href="styles/utillity.css">
    <link rel="stylesheet" href="styles/footer.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofia&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
<?php

$title = mysqli_real_escape_string($conn, $_GET['title']);
$author = mysqli_real_escape_string($conn, $_GET['author']);

$sql = "SELECT * FROM article WHERE title= '$title' AND author='$author'";
$result = mysqli_query($conn, $sql);
$QueryResults = mysqli_num_rows($result);

if ($QueryResults > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo " <div class='navigation'>
     <span class='logo'>Annals Of Research</span>
 </div>
 <div class='wrapper'>
     <div class='content'>
         <div class='actual'>
             <div class='desc'>
                 <span class='span'>Article</span>
                 <h3>" . $row['title'] . "</h3>
                 <p> <b>Date:</b> " . $row['datee'] . "</p>
                 <p> <b> Ref:</b> " . $row['refrence'] . "</p>
                 <p><b>Authors:</b> " . $row['author'] . "</p>
             </div>



             <a href='#'>
                 Download Pdf</a>

         </div>
         <div class='abstract'>
             <div class='resize'>
                 <h4>Abstract</h4>
                 <p>" . $row['preface'] . "</p> </div> </div> </div> </div> </div> ";
    }
}
?>
<footer>
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

</body>
<script src="js/reponsive.js"></script>

</html>