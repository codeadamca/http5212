<?php

/*
Monday - Do you have a case of the Mondays?
Friday Afternoon - It’s almost the weekend!
Before Noon - Have a good morning!
After Noon - Have a good day!
Weekend - It’s the weekend!!!
*/

$hour = date('G');
$day = date('w');

$hour = 14;
$day = 2;

echo '<p>
    The current hour is '.$hour.' and the 
    current day is '.$day.'.
    </p>';

if($day == 1)
{
    echo '<p>Do you have a case of the Mondays?</p>';
}
elseif($day == 5 && $hour > 12)
{
    echo '<p>It\'s almost the weekend!</p>';
}
elseif($day == 6 || $day == 0)
{
    echo '<p>It\'s the weekend!!!<?p>';
}
elseif($hour < 12)
{
    echo '<p>Have a good morning!</p>';
}
else
{
    echo '<p>Have a good day!</p>';
}