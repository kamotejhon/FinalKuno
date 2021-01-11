<?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $YS = filter_input(INPUT_POST, 'YS');
    $id = filter_input(INPUT_POST, 'id');
        
    if (!empty($username)){
        if (!empty($password)){
            if (!empty($YS)){
                if (!empty($id)){
    
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
            $sql = "INSERT INTO register (username, password, YS, id) VALUES ('$username','$password','$YS','$id')";
    

            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            } 

            else{
                echo "Error: ". $sql ."<br>". $conn->error;
            }

        $conn->close();
            }//end of if sa pinaka taas
        }//end of if sa pinaka taas
    }//end of if sa pinaka taas
    }//end of if sa pinaka taas
    else{
        echo "Password should not be empty";
        die();
        }

    }//end ng else sa Gitna
    else{
        echo "Username should not be empty";
        die();
    }   

?>