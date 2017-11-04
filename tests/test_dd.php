<?php

require __DIR__.'/../vendor/autoload.php';

$var = new stdClass;
$var->hello = ['here' => 'we go'];
$see = 'now you see me';

d($see);
dd($var);

echo 'now you dont';
