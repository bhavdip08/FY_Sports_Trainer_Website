<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="Sports(Login).css">
    <div id="container">
        <div id="sticky">
        <div id="logo">
            <img src="https://www.nicepng.com/png/full/14-145042_sports-png-pic-logo-for-sports-day.png"
                style="height: 70px;" width="100px">
        </div>
        <div id="navbar">
            <ul>
                <li><a href="Sports(Index).html" href="Sports(Index).css">Home</a></li>
                <li><a href="Sports(Gallery).html" href="Sports(Gallery).css">Gallary</a></li>
                <li id="privacy"><a href="Sports(Privacy).html" href="Sports(Privacy).css">Privacy</a></li>
                <li id="about"><a href="Sports(About).html" href="Sports(About).css">About Us</a></li>
                <li id="contact"><a href="Sports(Contact).html" href="Sports(Contect).css">Contact Us</a></li>
                <li id="login"><a href="Sports(Login).html" href="Sports(Login).css">Login</a></li>
                <li id="registration"><a href="Sports(Sing Up).html" href="Sports(Sing Up).css">Sign Up</a></li>
            </ul>
        </div>
        </div>
    </div>
</head>

<body>
    <div class="loginbox">
        <img src="https://cdn3.iconfinder.com/data/icons/essential-rounded/64/Rounded-31-512.png" class="avtar">
        <h1>Login Here</h1>
        <form>
            <p>Username</p>
            <input type="text" name="" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="" placeholder="Enter Password">
            <button type="submit" name="log_btn">Login</button>
            <br><a href="#">Forgot Password ?</a><br>
        </form>
    </div>
    
    <footer>
        <div class="footer">
          <p>&copy; 2024 Sports Consultancy. All rights reserved.</p>
        </div>
      </footer>

</body>

</html>

<?php

    include("database/connection.php");

?>