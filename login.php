<html>
<head>
    <title> Welcom To my Browse </title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
<h1>Welcome to our Project</h1>
    <div id = "frm">
        <form action = "home.php" method = "post">
            <p>
                <label>Username</label>
                <input type = "text" id = "username" name = "username" />
            </p>

            <p>
                <label>Password</label>
                <input type = "password" id = "password" name = "password" />
            </p>

            <p>
                <input type = "submit"  name = "submit" value="Login"/>
            </p>
            
        </form>

        <form action = "registration.php" method = "post">
            <p>
                <input type = "submit"  name = "submit" value="Register" />
            </p>
        </form>
    </div>

</body>
</html>
    

