<?php 
// Controller temporario

loadModel('WorkingHours');

$wh = WorkingHours::loadFromUserAndDate(2, date('Y-m-d'));

$workIntervalString = $wh->getWorkedInterval()->format('%H:%I:%S');
print_r($workIntervalString);
echo '<br>';

$lunchIntervalString = $wh->getLunchInterval()->format('%H:%I:%S');
print_r($lunchIntervalString);
echo '<br>';

print_r($wh->getExitTime());