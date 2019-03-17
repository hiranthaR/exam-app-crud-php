<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/15/19
 * Time: 7:20 PM
 */

require_once "./../components/forum.php";

if (session_status() == PHP_SESSION_NONE) session_start();
if (!isset($_POST["username"]) && !isset($_SESSION["username"])) {
    header("location: ./../");
    die();
} else {
    if (!isset($_SESSION["username"]))
        $_SESSION["username"] = $_POST["username"];
}

// temporary hardcode question data
// in $_post carry question number and year as the primary keys of question
// table.then retrieve question and show in here.
// but my part of here is crud of forum.so i hardcode question and answers
$questionYear = 2018;
$questionNumber = 32;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./../stylesheets/main.css">
    <link rel="stylesheet" href="./../stylesheets/forum.css">
    <link rel="icon" href="./../icons/user.png">
    <title>Forum Thread</title>
</head>
<body>
<?php include_once "./../components/nav_bar.php" ?>
<?php echo createQuestion($questionYear,$questionNumber)?>
<?php echo createAnswer(null); ?>
<?php echo createAnswer(null); ?>
<?php echo createAnswer(null); ?>
<?php echo createAnswer(null); ?>
</body>
</html>