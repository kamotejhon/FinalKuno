<?php
    session_start();

    $con = mysqli_connect('localhost', 'root','kamotejhon1');

    mysqli_select_db($con, 'info');

    $name = $_POST['username'];
    $pass = $_POST['password'];

    $s = "select * from user where name = '$name'";

    $result = mysqli_query($con,$s);

    $num = mtsqli_num_row($result);

    if (num==1)
    {
        echo "Already";
    }

    else
    {
        $reg= "insert (name, password) values ('$name', '$pass')";
        mysqli_query($con,$reg);
        echo "Logged";
    }
?>