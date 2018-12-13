
function validate() {

    // Set variables
    let success = false;
    let valid = 0;
    let checked = new Array();

    // Get array of radio buttons from test-view.php
    let q1 = document.test.question1;
    let q2 = document.test.question2;
    let q3 = document.test.question3;
    let q4 = document.test.question4;
    let q5 = document.test.question5;
    let q6 = document.test.question6;
    let q7 = document.test.question8;
    let q8 = document.test.question8;
    let q9 = document.test.question9;
    let q10 = document.test.question10;

    // Make two-dimensional array to be validated for a checked answer
    checked[0] = q1;
    checked[1] = q2;
    checked[2] = q3;
    checked[3] = q4;
    checked[4] = q5;
    checked[5] = q6;
    checked[6] = q7;
    checked[7] = q8;
    checked[8] = q9;
    checked[9] = q10;

    // Cycle through the array to make sure an answer is checked
    // If checked, increment the valid variable
    for (let i = 0; i < checked.length; i++) {
        for (let j = 0; j < checked[i].length; j++) {
            if (checked[i][j].checked == true) {
                valid++;
            } 
        }
    }

    // If valid equals 10, then the form can post
    // Otherwise alert that all questions must be answered
    if (valid == 10) {
        success = true;
    } else {
        alert('You must answer all of the questions.');
        success = false;
    }

    // Return true if form is filled out/valid, otherwise return false
    return success;
}

