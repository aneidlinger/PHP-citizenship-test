<?php

// Include provides access to questions.php
include('questions.php');

// Function to great an array of random numbers
function get_random_numbers () {
    $random = array();
    while (count($random) != 10) {
        array_push($random, random_int(0, 99));
        $random = array_unique($random);
        $random = array_values($random);
    }
    return $random;
}   

// Get array of random numbers
$assortment = get_random_numbers();

// Create arrays for asked questions and for the responses
$asked = array();

$response = array();

// Load the asked questions and the response array using the randomly generated numbers array
foreach ($assortment as $key => $value) {
    $asked[$key] = $questions[$value];
    $response[$key] = $answers[$value];
}

// Function to randomize the associative array of responses
function shuffle_assoc($list) { 
    $keys = array_keys($list); 
    shuffle($keys); 
    $random = array(); 
    foreach ($keys as $key) {
      $random[$key] = $list[$key]; 
    }
    return $random;
}

// Randomize the associative arrays
for ($x = 0; $x < 10; $x++) {
    foreach ($response[$x] as $key => $value) {
        $response[$x] = shuffle_assoc($response[$x]);
    }
}

// Include test-view.php 
include('test-view.php');