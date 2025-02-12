<?php

for($i = 1; $i <= 40; $i++)
{

    if($i % 5 == 0 && $i % 4 == 0)
    {
        echo '<font color="purple">'.$i.'</font>';
    }
    elseif($i % 5 == 0)
    {
        echo '<font color="red">'.$i.'</font>';
    }
    elseif($i % 4 == 0)
    {
        echo '<font color="blue">'.$i.'</font>';
    }
    else
    {
        echo '<font color="black">'.$i.'</font>';
    }

    echo '<br>';

}
