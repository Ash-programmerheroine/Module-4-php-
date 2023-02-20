<?php

# finding Big Word
function longestWord($str) {
    // Convert the string to an array of words
    $words = explode(' ', $str);
    
    // Initialize the longest word variable
    $longest_word = '';
    
    // Loop through the array of words
    foreach ($words as $word) {
      // If the current word is longer than the current longest word, update the longest word
      if (strlen($word) > strlen($longest_word)) {
        $longest_word = $word;
      }
    }
    
    // Return the longest word
    return $longest_word;
  }
  $str = "the quick brown fox jumped over the lazy dog";
echo longestWord($str);