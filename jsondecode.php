<?php

$json = 
'{
"uglify-js": "1.3.4"
, "jshint": "0.9.1"
, "recess": "1.1.8"
, "connect": "2.1.3"
, "hogan.js": "2.0.0"
}';

// Decode a JSON to an ARRAY
$myArray=json_decode($json, true);
print_r($myArray)
?>
