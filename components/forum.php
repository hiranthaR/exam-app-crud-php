<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/17/19
 * Time: 10:18 PM
 * @param $questionYear
 * @param $questionNumber
 */

function createQuestion($questionYear, $questionNumber)
{
    $questionSubject = "Physics";
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
    <li>
        <div class='answer'>" . $answer4 . "</div>
    </li>
    <li>
        <div class='answer'>" . $answer5 . "</div>
    </li>
</ol>
</div>";

    return $qestionView;
}

function createAnswer($answer)
{
    $answerView = "<div class='answer-box'>
<div class='answer-box-answer'>sample comment is this came from database.sample comment is this came from database.sample comment is this came from database.sample comment is this came from database.sample comment is this came from database.sample comment is this came from database.sample comment is this came from database.</div>
<div class='answer-box-user-band'>

<img src='./../icons/user.png' alt='user' style='height: 18px;width: 18px;float: left'>
<a href='#' style='color: blue'>
<span style='margin-left: 3px;'>Hirantha</span>
</a>

<img src='./../icons/dot-menu.png' alt='user' style='height: 18px;width: 18px;float: right'>

<a href='#' style='color: white;'>
<span style='margin-left: 3px;margin-right: 13px;float: right'>10</span>
<img src='./../icons/chat.png' alt='user' style='height: 18px;width: 18px;float: right'>
</a>

<a href='#' style='color: white;'>
<span style='margin-left: 3px;margin-right: 8px;float: right'>12</span>
<img src='./../icons/dislike.png' alt='user' style='height: 18px;width: 18px;float: right'>
</a>

<a href='#' style='color: white;'>
<span style='margin-left: 3px;margin-right: 8px;float: right'>123</span>
<img src='./../icons/like.png' alt='user' style='height: 18px;width: 18px;float: right'>
</a>

</div>
</div>";
    return $answerView;
}
