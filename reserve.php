<?php

    $db = mysqli_connect('localhost','root','salacup123','reservation');

    if (isset($_POST['submit'])){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $phone = mysqli_real_escape_string($db, $_POST['phone']);
        $detail = mysqli_real_escape_string($db, $_POST['detail']);

        $query = mysqli_query($db, "INSERT INTO res(username,phone,detail) VALUE ('$username','$phone','$detail')");
        if($query){
            $_SESSION['success'] = "Your Reservation hab been submitted";
            $_SESSION['id'] = $db->inser_id;
            header('location: main.php');
            exit();
        }

        else{
            $_SESSION['error'] = "Invalid Input";
        }
    }


?>