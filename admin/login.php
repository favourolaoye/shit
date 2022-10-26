<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="login.inc.php" method="POST">
                <h3>Login</h3>
                
                    <input type="text" name="uid" placeholder="Username" required>
                    <input type="password" name="pwd" placeholder="Password" required>
                    <div class="check"><input type="checkbox" id=""> <span>Remember me</span></div>
                    <div class="btn">
                        <button type="submit">Login</button>
                    
                </div>
                <?php
                     if(!isset($_GET['error'])){
                        exit();
                     }
                     else{
                        $signupCheck = $_GET['error'];

                        if($signupCheck == "empty"){
                            echo "<p class='error'>Fill in all fields</p>";
                            exit();
                        }
                    
                        elseif($signupCheck == "invalid"){
                            echo "<p class='error'>invalid credentials</p>";
                            exit();                        
                        }
                        
                        // elseif($signupCheck == "sqlerror"){
                        //     echo "<p class='error'>error inserting into db</p>";
                        //     exit();
                        // }
                       
                     }

                    ?>
            </form>
        </div>
    </div>
</body>
</html>