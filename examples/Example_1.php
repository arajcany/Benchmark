<?php
require('..\vendor\autoload.php');
use arajcany\Benchmark\Benchmark;

$bm = new Benchmark();

$bm->start('One');
sleep(1);
$bm->stop('One');

$bm->start('Two');
sleep(2);
$bm->stop('Two');

$bm->start('Three');
sleep(3);
$bm->stop('Three');

$bm->display();
