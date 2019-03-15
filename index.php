<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/15/19
 * Time: 4:03 PM
 */

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Hirantha">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheets/main.css">
    <title>Login Section</title>
</head>
<body style="height: 97%">

<div>
    <form action="/home" method="get" class="forms" style="width: 300px;text-align: center;margin: auto">
        <br>
        <img src="./icons/user.png" style="width: 150px;color: white">
        <br><br><br>
        <input type="text" required name="username" class="form-input" placeholder="Username"
               style="width: 250px"><br><br>
        <select name="role" id="role-selector" style="width: 250px" class="form-input">
            <option value="student" selected>Student</option>
            <option value="teacher">Teacher</option>
            <option value="moderator">Moderator</option>
        </select>
        <br><br><br>
        <input type="submit" value="Login" style="width: 250px" class="form-button">
        <br><br>
        <div class="tooltip">Need help?
            <span class="tooltiptext">
                This is the login non-authenticating login.This just implemented for archive 3 levels of access for the app.Enter your name and choose a role for login in.thank you!
            </span>
        </div>
    </form>

</div>
</body>
</html>
