<html>
<head>
    <title> Welcom To my Browse </title>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "style1.css">
</head>
<body>
<div id="a"> 
    <form action = "login_code.php" method = "post">
        <p>
            <label>Username</label>
                <input type = "text" id = "username" name = "username" required=""/>
        </p>
        <p>
            <label>password</label>
                <input type = "text" id = "pwd" name = "password" required=""/>
        </p>
          
        <button type="submit" name="login" class="b btn-primary">Login</button>
    </form>
  
    <form action = "registration.php" method = "post">
        <p>
            <button type="submit" name="register" class="btn btn-primary">Register</button>
        </p>
    </form>   
</div>
</body>
</html>
    