<?php

require __DIR__.'/../../vendor/autoload.php';

$var = new stdClass;
$var->hello = ['here' => 'we go'];
$see = 'now you see me';

dump($see);
dump_die($var);

echo 'now you dont';
