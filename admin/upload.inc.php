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
           
            $file = $_FILES['file'];
// print_r($file);
            $filename = $_FILES['file']['name'];
            $filetmpName = $_FILES['file']['tmp_name'];
            $fileerr = $_FILES['file']['error'];
            $fileSize = $_FILES['file']['size'];
            $fileType = $_FILES['file']['type'];

            $fileExt = explode('.', $filename);
            $fileActExt = strtolower(end($fileExt));

            $allowedType = ['jpeg','jpg','pdf'];

            if(in_array($fileActExt, $allowedType)){
              if($fileError===0){
                 if($fileSize > 100000){
                     $fileNameNew = uniqid('', true).".".$fileActExt;
                     $fileDestination = 'uploads/'.$fileNameNew;
                     move_uploaded_file($filetmpName, $fileDestination);
                 }
                 else{
                    echo "file size is greater than 1gb";
                 }
              }
              else{
                echo"error uploading file";
              }
            }
            else{
                echo "not alllowed";
            }

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

