<?php
session_start();
require "dbh.inc.php";

if (isset($_POST['addnew-btn'])) {

    $username = $_POST['uid'];
    $password = $_POST['pwd'];
    $passwordReapeat = $_POST['pwd-repeat'];
    // $errors = array();

    if (empty($username) || empty($password) || empty($passwordReapeat)) {
        header("Location: addnew.php?error=empty");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/", $username)) {
        header("Location: addnew.php?error=char");
        
        exit();
    // } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     header("Location: addnew.php?error=wrongemailcombination");
    //     $errors = "invalid email";
    //     exit();
    } else if (!preg_match("/[a-zA-z0-9]*$/", $username)) {
        header("Location: addnew.php?error=char");
        
        exit();
    } else if ($password != $passwordReapeat) {
        header("Location: addnew.php?error=match");
        $errors['password'] = "password does not match";
        exit();
    } else {
        $sql = "INSERT INTO account (username,pass) VALUES(?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: addnew.php?error=sqlerror");
            exit();
        } else {
        
            $hashed = password_hash($password, PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt, 'ss', $username, $hashed);
            mysqli_stmt_execute($stmt);
        
            header("Location: addnew.php?error=sucess");
            
            exit();
        
        }
        }
    }
