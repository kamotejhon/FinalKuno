<?php
    session_start();
    $port = NULL;

    $db = mysqli_connect("localhost","root", "salacup123", "authentication");

    if(isset($POST['submit btn'])){
        session_start();
        $username = mysqli_real_escape_string($POST['username']);
        $password = mysqli_real_escape_string($POST['password']);
        $password2 = mysqli_real_escape_string($POST['password2']);
    
        if($password==$password2)
        {
            $password = md5($password);
            $sql = "INSERT INTO users(username,password) VALUE ('$username','$password')";
            mysqli_query($db,$sql);
            $_SESSION['message']= "You are now Log In";
            $_SESSION['username']= $username;
            header("location: home.php");
        }
        else{
            $_SESSION['message']= "Not Matched";
        }
    }

?>

<html>
<head>
    <title> Welcom To my Browse </title>
</head>
<body>
        <form method = "POST" action = "log.php">

            <p>
                <label>Username</label>
                <input type = "text" name = "username" class = textInput />
            </p>

            <p>
                <label>Password</label>
                <input type = "password" name = "password" class = textInput/>
            </p>

            <p>
                <label>Password2</label>
                <input type = "password" name = "password2" class = textInput />
            </p>


            <p> 
                <input type = "submit" name = "submit btn" value = "Register" />
            </p>
        </form>

</body>
</html>