<?php
session_start();
require "dbh.inc.php";

// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['uid'], $_POST['pwd']) ) {
	// Could not get the data that should have been sent.
    header("Location: login.php?error=empty");
	exit();
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT id, pass FROM account WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['uid']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    
   if ($stmt->num_rows > 0) {
    
        $stmt->bind_result($id, $pass);
        $stmt->fetch();

        // Account exists, now we verify the password.
        
        if (password_verify($_POST['pwd'], $pass)) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in//
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['uid'];
            $_SESSION['id'] = $id;
          
            header('location: onboarding.php');
        } else{
            
            header('Location: login.php?error=invalid');
            exit();
            
        }
    } else {
        header('Location: login.php?error=invalid');
        exit();
    }

	$stmt->close();

 
}
?>