<?php

// Supply access to the questions
include('questions.php');

// Create an array of which questions were asked on test-view.php
$question_asked = array();

$question_asked[0] = $_POST['ask1'];
$question_asked[1] = $_POST['ask2'];
$question_asked[2] = $_POST['ask3'];
$question_asked[3] = $_POST['ask4'];
$question_asked[4] = $_POST['ask5'];
$question_asked[5] = $_POST['ask6'];
$question_asked[6] = $_POST['ask7'];
$question_asked[7] = $_POST['ask8'];
$question_asked[8] = $_POST['ask9'];
$question_asked[9] = $_POST['ask10'];

// Create an array of the response selections from test-view.php
$selection = array();

$selection[0] = $_POST['question1'];
$selection[1] = $_POST['question2'];
$selection[2] = $_POST['question3'];
$selection[3] = $_POST['question4'];
$selection[4] = $_POST['question5'];
$selection[5] = $_POST['question6'];
$selection[6] = $_POST['question7'];
$selection[7] = $_POST['question8'];
$selection[8] = $_POST['question9'];
$selection[9] = $_POST['question10'];

// Variable to count total points
$total = 0;

// Create array of incorrect answers
$wrong = array();

// Cycle through the selection array, if correct, add a point to $total
// Otherwise add question to the $wrong array
for ($x = 0; $x < 10; $x++) {
    if ($selection[$x] == $correct) {
        $total++;
    } else {
        array_push($wrong, $question_asked[$x]);
    }
} 

// Create timestamp and format
date_default_timezone_set('America/Chicago');
$submitted = date('M j, Y \a\t g:i a');


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test Results</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="usa.png" alt="American Flag and Statue of Liberty">
            <h1>Test Results</h1>
        </div>
    </header>
    <div class="container">
        <div class="question">
            <!-- Use PHP to display whether the user passed or failed -->
            <h2><?php if ($total > 6) {
                echo '<span class="green">You passed!</span>';
                } else {
                    echo '<span class="red">You failed.</span>';
                }
            ?></h2>
            <!-- Display the score in percentage -->
            <p class="larger">You scored a <?php echo ($total * 10); ?>%</p>
            <!-- Display the timestamp -->
            <p>Test was submitted on: <?php echo $submitted; ?></p>
        </div>
        <div class="question">
            <p class="larger">For your review, here is a list of the questions you got wrong:</p>
            <ol>
                <!-- Display the questions that were answered incorrectly -->
                <?php 

                foreach ($wrong as $value) {
                    echo '<li>'. $value .'</li>';
                } 
                

                ?>
            </ol>
        </div>
        <div class="button-container">
            <a href="index.php">Retake the test</a>
        </div>
    </div>
    
</body>
</html>