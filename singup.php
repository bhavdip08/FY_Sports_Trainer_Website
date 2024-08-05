<html>
<title>Sign Up</title>

<head>
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
    <link rel="stylesheet" type="text/css" href="Sports(Sing Up).css">
</head>

<body>
    <div class="loginbox">
        <img src="https://cdn3.iconfinder.com/data/icons/essential-rounded/64/Rounded-31-512.png" class="avtar">
        <h1>Sign Up Here</h1>
        <form method="POST">
            <p>Email or Username</p>
            <input type="text" placeholder="Enter Email or Username" name="unm">
            <p>Password</p>
            <input type="password" placeholder="Enter Password" name="pass">
            <button type="submit" name="btn">Let's Go</button>
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

    if(isset($_POST['btn']))
    {
        $unm = $_POST['unm'];
        $pass = $_POST['pass'];

        $q = "INSERT INTO `userdata`(`id`, `username`, `password`) VALUES ('?','$unm','$pass')";
        $qq = mysqli_query($con,$q);

    }

?>