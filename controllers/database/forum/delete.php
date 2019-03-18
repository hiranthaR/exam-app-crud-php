<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/18/19
 * Time: 8:33 PM
 */

require_once "./../connection.php";

$tableForumAnswers = "answers";

if ($connection) {
    $answerID = $_POST['id'];
    deleteAnswer($answerID);
} else {
    echo false;
}

function deleteAnswer($id)
{
    global $connection;
    global $tableForumAnswers;

    $sql = "DELETE FROM " . $tableForumAnswers . " WHERE answer_id=" . $id . ";";
    echo mysqli_query($connection, $sql);
}