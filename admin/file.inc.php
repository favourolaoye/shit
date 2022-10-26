<?php

if(isset($_POST['file-btn'])){

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
         header("Location: onboarding.php?error=upload sucess");
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

}
?>