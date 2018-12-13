<?php

// Method to display errors
ini_set('display_errors', 1);

// Provide access to the questions
include('questions.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>US Citizenship Test</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="usa.png" alt="American Flag and Statue of Liberty">
            <h1>US Citizenship Test</h1>
        </div>
    </header>
    <div class="container">       
        <!-- Form connects to the JavaScript in order to validate whether the quesetions have all been answered -->
        <!-- Form posts data to results-view.php -->
        <form action="results-view.php" method="POST" name="test" onsubmit="return validate()">
            <div class="question">
                <h2>Question 1:</h2><br>
                <!-- PHP echoes the appropriate question from the questions asked array -->
                <label for="question1"><?php echo $asked[0];?></label>
                <!-- PHP echoes the responses as radio buttons -->
                <?php
                // Hidden field holds the question string to be sent to results-view.php
                echo '<input type="hidden" name="ask1" value="'. $asked[0] .'"><br>';
                foreach ($response[0] as $key => $value){
                    echo '<input type="radio" class="option" name="question1" id="question1" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 2:</h2><br>
                <label for="question2"><?php echo $asked[1]; ?></label>
                <?php
                echo '<input type="hidden" name="ask2" value="'. $asked[1] .'"><br>';
                foreach ($response[1] as $key => $value){
                    echo '<input type="radio" class="option" name="question2" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 3:</h2><br>
                <label for="question3"><?php echo $asked[2]; ?></label>
                <?php
                echo '<input type="hidden" name="ask3" value="'. $asked[2] .'"><br>';
                foreach ($response[2] as $key => $value){
                    echo '<input type="radio" class="option" name="question3" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 4:</h2><br>
                <label for="question4"><?php echo $asked[3]; ?></label>
                <?php
                echo '<input type="hidden" name="ask4" value="'. $asked[3] .'"><br>';
                foreach ($response[3] as $key => $value){
                    echo '<input type="radio" class="option" name="question4" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 5:</h2><br>
                <label for="question5"><?php echo $asked[4]; ?></label>
                <?php
                echo '<input type="hidden" name="ask5" value="'. $asked[4] .'"><br>';
                foreach ($response[4] as $key => $value){
                    echo '<input type="radio" class="option" name="question5" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div = class="question">
                <h2>Question 6:</h2><br>
                <label for="question6"><?php echo $asked[5]; ?></label>
                <?php
                echo '<input type="hidden" name="ask6" value="'. $asked[5] .'"><br>';
                foreach ($response[5] as $key => $value){
                    echo '<input type="radio" class="option" name="question6" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 7:</h2><br>
                <label for="question7"><?php echo $asked[6]; ?></label>
                <?php
                echo '<input type="hidden" name="ask7" value="'. $asked[6] .'"><br>';
                foreach ($response[6] as $key => $value){
                    echo '<input type="radio" class="option" name="question7" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 8:</h2><br>
                <label for="question8"><?php echo $asked[7]; ?></label>
                <?php
                echo '<input type="hidden" name="ask8" value="'. $asked[7] .'"><br>';
                foreach ($response[7] as $key => $value){
                    echo '<input type="radio" class="option" name="question8" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 9:</h2><br>
                <label for="question9"><?php echo $asked[8]; ?></label>
                <?php
                echo '<input type="hidden" name="ask9" value="'. $asked[8] .'"><br>';
                foreach ($response[8] as $key => $value){
                    echo '<input type="radio" class="option" name="question9" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="question">
                <h2>Question 10:</h2><br>
                <label for="question10"><?php echo $asked[9]; ?></label>
                <?php
                echo '<input type="hidden" name="ask10" value="'. $asked[9] .'"><br>';
                foreach ($response[9] as $key => $value){
                    echo '<input type="radio" class="option" name="question10" value="'. $key .'">'. $value .'</input><br>';
                }
                ?>
            </div>
            <div class="button-container">
                <input type="submit" class="button" value="Submit">
            </div>
            <br><br>
        </form>
    </div>
    <!-- Attach JavaScript file -->
    <script type="text/javascript" src="script.js"></script>

</body>
</html>