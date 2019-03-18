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
    if (!isset($_SESSION['role']))
        $_SESSION['role'] = $_POST['role'];
}

// temporary hardcode question data
// in $_post carry question number and year as the primary keys of question
// table.then retrieve question and show in here.
// but my part of here is crud of forum.so i hardcode question and answers
$questionYear = 2018;
$questionNumber = 32;
$questionSubjectCode = "phy";
$username = $_POST["username"];

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
    <script src="./../jquery/jquery.min.js"></script>
    <title>Forum Thread</title>
</head>
<body>
<?php include_once "./../components/nav_bar.php" ?>
<?php echo createQuestion($questionYear, $questionNumber, $questionSubjectCode) ?>
<div id="answers-container">
</div>
<?php echo createInsertBoard(); ?>

<script>

    function showHideBand(id) {
        document.getElementById("edit-band-" + id).hidden = !document.getElementById("edit-band-" + id).hidden;
    }

    function deleteAnswer(id) {
        $.ajax({
            url: './../controllers/database/forum/delete.php',
            method: 'post',
            data: {id: id},
            success: function (data) {
                // document.getElementById("answer-box-" + id).innerHTML = "";
                document.getElementById("answer-box-" + id).remove();
            },
            error: function (e) {
                console.log(e.status);
            }
        });
    }

    $(document).ready(function () {

        $.ajax({
            url: "./../controllers/database/forum/read_answers.php",
            method: 'get',
            success: function (data) {
                document.getElementById("answers-container").innerHTML += data;
            },
            error: function (e) {
                console.log(e.message);
                console.log(e.status);
                console.log(e.responseText);
            }
        });

        $('#answer-form').on('submit', function (e) {
            e.preventDefault();
            var data = $('#answer-form').serializeArray();
            data.push({name: "owner", value: "<?php echo $username ?>"});
            data.push({name: "question_year", value: "<?php echo $questionYear?>"});
            data.push({name: "question_number", value: "<?php echo $questionNumber ?>"});
            data.push({name: "question_subject_code", value: "<?php echo $questionSubjectCode ?>"});
            $.ajax({
                    url: './../controllers/database/forum/insert.php',
                    data: data,
                    method: 'post',
                    success: function (data) {
                        $('#answer-form').trigger('reset');
                        document.getElementById("answers-container").innerHTML += data;
                    },
                    error: function (e) {
                        console.log(e.status);
                        console.log(e.message);
                        console.log(e.responseText);
                        alert("error:" + e.message);
                    }
                }
            );
        })
    });
</script>
</body>
</html>