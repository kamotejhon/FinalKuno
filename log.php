<?php
    session_start();

    $db = mysqli_connect("localhost","root", "", "authentication");

    if(isset($POST['submit'])){

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
    <div id = "frm">
        <form action = "log.php" method = "post">

            <p>
                <label>Username</label>
                <input type = "text" id = "username" name = "username" />
            </p>

            <p>
                <label>Password</label>
                <input type = "password" id = "password" name = "password" />
            </p>

            <p>
                <label>Password2</label>
                <input type = "password" id = "password2" name = "password" />
            </p>


            <p> 
                <input type = "submit" id = "btn" name = "submit" />
            </p>
        </form>
    </div>

</body>
</html>