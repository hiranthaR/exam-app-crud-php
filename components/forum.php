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

    echo $qestionView;
}
