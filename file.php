<?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    $yearsection = filter_input(INPUT_POST, 'yearsection');
    $id = filter_input(INPUT_POST, 'id');
        
    if (!empty($username)){
    if (!empty($password)){ 
    if (!empty($yearsection)){
    if (!empty($id)){ 

    $host = "localhost";        //localhost ng phpadmin
    $dbusername = "root";       //username sa phpadmin
    $dbpassword = "salacup123"; //password sa phpadmin
    $port = NULL;
    $dbname = "registration"; //Name sa adminhost

    $conn = new mysqli ($host, $dbusername, $dbpassword , $dbname); 
    //declaration sa mysqli para makaconenct sa phpadmin
    if (mysqli_connect_error()){
        die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
        }

    else{
    
        $sql = "INSERT INTO registered (username, password, yearsection, id) VALUES ('$username','$password','$yearsection' ,'$id')";
    

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