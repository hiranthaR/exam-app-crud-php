<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/18/19
 * Time: 7:13 PM
 */

if (session_status() == PHP_SESSION_NONE) session_start();

require_once "./../../../components/forum.php";
require_once "./../connection.php";

$tableForumAnswers = "answers";

if ($connection) getForumAnswers();
else echo "dasdasd";

function getForumAnswers()
{
    global $connection;
    global $tableForumAnswers;
    $sql = "SELECT * FROM " . $tableForumAnswers . ";";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo createAnswer($row);
        }
    } else {
        "error";
    }
}
