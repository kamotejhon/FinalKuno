<?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $YS = filter_input(INPUT_POST, 'YS');
        
    if (!empty($username)){
        if (!empty($password)){
            if (!empty($YS)){
    
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "salacup123";
    $port = NULL;
    $dbname = "registration";

    $conn = new mysqli ($host, $dbusername, $dbpassword , $dbname);

    if (mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
        }
    else{
    
    $sql = "INSERT INTO register (username, password, YS) VALUES ('$username','$password','$YS')";
    

    if ($conn->query($sql)){
    echo "New record is inserted sucessfully";
    } 

    else{
        echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close();
    }
    }
}
    else{
        echo "Password should not be empty";
        die();
    }
    }
    else{
        echo "Username should not be empty";
        die();
    }   

    ?>