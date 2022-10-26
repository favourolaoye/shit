<?php
session_start();
session_abort();
session_destroy();
// Redirect to the login page:
header('Location: login.php');
?>