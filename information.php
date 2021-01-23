<html>
<head>
    <title> Welcom To my Browse </title>
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
<div id="frm">
    <form action = "reserve.php" method = "post">
            
            <label>Username</label>
            <p>
                <input type = "text" id = "username" name = "username" required="" />
            </p>

            <label>phone</label>
            <p>
                <input type = "number" id = "phone" name = "phone" required="" />
            </p>
        
            <label>details</label>
            <p>
                <textarea name = "detail" placeholder = "Input Something" rows = "10" required=""> </textarea>
            </p>
        <button type="submit" name="submit" >submit</button>
    </form>
</div>
</body>
</html>
    