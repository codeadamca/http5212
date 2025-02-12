<?php

for($i = 1; $i <= 6 ; $i ++)
{

    echo '<h'.$i.'>This is loop number '.$i.'</h'.$i.'>';

}

echo 'After the loop the counter variable is '.$i.'</p>';


for($i = 0; $i < 2; $i ++)
{
    for($i = 0; $i < 5; $i ++)
    {
        echo '<p>The counter is '.$i.'</p>';
    }
}

echo '<hr>';

echo '<p>The counter is '.$i.'</p>';

