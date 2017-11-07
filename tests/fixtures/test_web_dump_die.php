<?php
require __DIR__.'/../../vendor/autoload.php';
/*
test with web server to check if line number is correct
*/
$var = ['now you see me'];
echo '<h1>Hi!</hi>';

dump_die($var);

echo 'now you dont';
