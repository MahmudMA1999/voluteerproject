<?php
include "functions/connections.php";
include "functions/functions.php";

$username = $password = $usernameError = $passwordError = $loginError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if($_POST['username'] == '') {
        $usernameError = "Username is required";
    }else{
    $username = clearInput($_POST["username"]);
    if (!preg_match("/^[a-z A-Z' ]*$/",$username)) {
        $usernameError = "Only letters allowed";
      }
     }

if($_POST['password'] == '') {
   $passwordError = "Password is required";
}else{ 
    $password = md5($_POST["password"]);
}

if($usernameError == "" and $passwordError == ""){

    $sql_login = "SELECT * FROM users WHERE `username` = '$username' and `password` = '$password'";

    $result = mysqli_query($connections,$sql_login);
    
    if(mysqli_num_rows($result) > 0){
        
            session_start();
            $_SESSION['user_login'] = 'yes';
            header('Location: http://localhost/volunteer/admin/index.php');
        }
        else{
            $loginError = "Username or Password is wrong";
        }
    }

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <p><?=$loginError?></p>
<form action="" method="post">
    <h1>Login</h1>
    <label for="username">Username:</label>
      <p> <?= $usernameError ?> 
      </p>
      <input type="text" name="username" value="<?php $username?>" />
      <br>

      <label for="password">Password:</label>
      <p> <?= $passwordError ?>
    </p>
      <input type="password" name="password" />
      
      <br><br>
      <input type="submit" value="Sumbit" />
    </form>

    
</body>
</html>
