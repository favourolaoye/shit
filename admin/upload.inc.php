<?php

session_start();

if(isset($_POST['article'])){

require "articleDB.php";

$title = $_POST['title'];
$ref = $_POST['ref'];
$author = $_POST['author'];
$date = $_POST['datein'];
$preface = $_POST['preface'];

$sql_u = "SELECT * FROM article WHERE title='$title'";
$res_u = mysqli_query($conn, $sql_u);


 if(mysqli_num_rows($res_u) > 0) {
 	header("Location: onboarding.php?error=exists");
}
    else{
      
        $sql = "INSERT  INTO article (title, refrence, datee, author, preface) VALUES (?, ?, ?, ?, ?);";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: onboarding.php?error=sqlerror");
            exit();
        }
        else {
           
        
            mysqli_stmt_bind_param($stmt, 'sssss', $title, $ref, $date, $author, $preface,);
            mysqli_stmt_execute($stmt);
            header("Location: onboarding.php?error=sucess");
            exit();
        }
        }
        mysqli_close($conn);
        mysqli_close($stmt);
        }
        else {
            header("Location: onboarding.php");
        }

