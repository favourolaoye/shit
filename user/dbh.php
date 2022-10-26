<?php
$conn = mysqli_connect("localhost","root","","journal");

if(!$conn){
    die("connection error:".mysqli_connect_error());
}