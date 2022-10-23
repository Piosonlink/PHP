<?php
// use substr( ) to select you substring
// first character of a string is at position 0
$substring = substr($string, $start, $length);
$username = substr($_REQUEST['username'], 0, 20);



//see https://www.php.net/manual/en/function.substr.php