<?php 
// Controller temporario

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(2, date('Y-m-d'));

$workIntervalString = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($workIntervalString);
echo '<br>';