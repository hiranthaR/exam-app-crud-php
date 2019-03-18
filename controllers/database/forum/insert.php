<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/18/19
 * Time: 1:36 AM
 */

if (session_status() == PHP_SESSION_NONE) session_start();

require_once "./../../../components/forum.php";
require_once "./../connection.php";

$tableForumAnswers = "answers";

if ($connection) {
//    $username = $_SESSION['username'];
    $questionYear = $_POST['question_year'];
    $questionNumber = $_POST['question_number'];
    $questionSubjectCode = $_POST['question_subject_code'];
    $owner = $_POST['owner'];
    $answerText = $_POST['answer_text'];

    $row = array('question_year' => $questionYear,
        'question_number' => $questionNumber,
        'question_subject_code' => $questionSubjectCode,
        'owner' => $owner,
        'answer_text' => $answerText,
        'likes' => 0,
        'dislikes' => 0);
    insertForumAnswer($row);
} else {
    echo "<div style='border: 2px red solid;color: red'>Error:In database Connection!</div>";
}

function insertForumAnswer($row)
{
    global $connection;
    global $tableForumAnswers;
    $sql = "INSERT INTO " . $tableForumAnswers . " VALUES ("
        . "0,"
        . $row['question_year'] . ","
        . $row['question_number'] . ","
        . "'" . $row['question_subject_code'] . "',"
        . "'" . $row['owner'] . "',"
        . "'" . $row['answer_text'] . "',"
        . $row['likes'] . ","
        . $row['dislikes'] . ");";

    if (mysqli_query($connection, $sql)) {
        $id = mysqli_insert_id($connection);
        $row += ['answer_id' => $id];
        echo createAnswer($row);
    } else {
        echo "<div style='border: 2px red solid;color: red'>Error:While inserting!</div>";
    }
}