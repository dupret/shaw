<?php

$word = $_POST['word'];
$reverse = strrev($word); 
if ($word == $reverse) 
    echo '<h2> This is a palindrome!</h2>';
else
    echo '<h2> This is not a palindrome!</h2>';

echo '<br /><br /> <a href="http://www.contentstorm.com.br/challenge/a.html">Start over?</a>'
?>