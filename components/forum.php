<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/17/19
 * Time: 10:18 PM
 * @param $questionYear
 * @param $questionNumber
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function createQuestion($questionYear, $questionNumber, $questionSubjectCode)
{
    $questionSubject = $questionSubjectCode == "phy" ? "Physics" : "other";
    $question = "Where is my shoe sakdladjlsa lj ladjkla jaljdalsj ladjlasdjlajdlj ajlas dal aldkj asjla djlkad asljk a jdlak?";
    $answer1 = "answer 1 is a";
    $answer2 = "answer 2 is b";
    $answer3 = "answer 3 is c";
    $answer4 = "answer 4 is d";
    $answer5 = "answer 5 is e";

    $qestionView = "<div class='question-box'>
    <div class='question-header'>" . $questionSubject . " " . $questionYear . " - " . $questionNumber . "</div>
<div class='question'> " . $question . " </div>
<ol>
    <li>
        <div class='answer'>" . $answer1 . "</div>
    </li>
    <li>
        <div class='answer'>" . $answer2 . "</div>
    </li>
    <li>
        <div class='answer'>" . $answer3 . "</div>
    </li>
    <u><b>
    <li>
        <div class='answer'>" . $answer4 . "</div>
    </li>
    </b></u>
    <li>
        <div class='answer'>" . $answer5 . "</div>
    </li>
</ol>
</div>";

    return $qestionView;
}

function createAnswer($answer)
{
    $answerText = trim($answer['answer_text']);
    $answerText = str_replace("\r\n", "</br>", $answerText);
    $owner = $answer["owner"];
    $likes = $answer['likes'];
    $dislikes = $answer['dislikes'];
    $answerID = $answer['answer_id'];

    $username = strtolower($_SESSION['username']);
    $role = strtolower($_SESSION['role']);

    $delete = "";
    //render if owner or admin delete function
    if ($username == $owner || $role == 'moderator') {
        $delete = "<img src='./../icons/delete.png' onclick='deleteAnswer(" . $answerID . ");' alt='delete' style='height: 18px;margin:auto 10px;width: 18px;float: right'>";
    }

    $edit = "";
    //render if owner edit function
    if ($username == $owner) {
        $edit = "<img src='./../icons/edit.png' onclick='showHideBand(" . $answerID . ");' alt='edit' style='height: 18px;margin:auto 10px;width: 18px;float: right'>";
    }

    $answerView = "<div class='answer-box' id='answer-box-" . $answerID . "'>
<div class='answer-box-answer'>" . $answerText . "</div>
<div class='answer-box-user-band'>

<img src='./../icons/user.png' alt='user' style='height: 18px;width: 18px;float: left'>
<a href='#' style='color: white;text-decoration: none'>
<span style='margin-left: 3px;'>" . $owner . "</span>
</a>

" . $delete . "
" . $edit . "

<a href='#' style='color: white;'>
<span style='margin-left: 3px;margin-right: 15px;float: right'>0</span>
<img src='./../icons/chat.png' alt='user' style='height: 18px;width: 18px;float: right'>
</a>

<a href='#' style='color: white;'>
<span style='margin-left: 3px;margin-right: 10px;float: right'>" . $dislikes . "</span>
<img src='./../icons/dislike.png' alt='user' style='height: 18px;width: 18px;float: right'>
</a>

<a href='#' style='color: white;'>
<span style='margin-left: 3px;margin-right: 10px;float: right'>" . $likes . "</span>
<img src='./../icons/like.png' alt='user' style='height: 18px;width: 18px;float: right'>
</a>

</div>
<div class='answer-box-edit-band' hidden id='edit-band-" . $answerID . "'>
<form style='text-align: right' id='edit-form-" . $answerID . "'>
<textarea rows='5' form='edit-form-" . $answerID . "' name='answer_text' style='resize: none;width: 100%;font-size: 14px'>" . str_replace("</br>", "\r\n", $answerText) . "</textarea>
 <br>
    <input type='submit' value='Edit Answer' class='form-button'>
</form>
</div>
</div>";
    return $answerView;
}

function createInsertBoard()
{
    $insertView = "<div class='answer-box'>
    <div style='background-color: #454545;color: white;font-size: 18px;padding: 2px 7px'>Add new Comment</div>
    <form id='answer-form' style='padding: 10px;text-align: right'>
    <textarea rows='5' form='answer-form' name='answer_text' style='resize: none;width: 100%;font-size: 14px'></textarea>
    <br>
    <input type='submit' value='Add answer' class='form-button'>
</form>
</div>";
    return $insertView;
}