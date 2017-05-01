<?php

function solution($N)
{ 
    if (!is_numeric($N)) return false;

    $stringLength = strlen($N);
    $splitStr = str_split($N);

    $intNum = array();
    for($i=0; $i<count($splitStr); $i++)
    {
        if (!isset($intNum[$splitStr[$i]]))
        {
            $intNum[$splitStr[$i]] = 1;
        }
        else
        {
            $intNum[$splitStr[$i]] ++;
        }
    }

    $total = countOrder($stringLength, $intNum);

    //escape zero in the head
    if (preg_match('/[0]+/', $N))
    {
        $intNum[0] --;
        $total -= countOrder(($stringLength - 1), $intNum);
    }

    return $total;
}

function countOrder($length, $numLists)
{
    $upNum = counter($length);
    //echo $upNum."@@@";
    $downNum = 1;
    foreach ($numLists as $num)
    {
        $downNum *= counter($num);
    }

    //echo $downNum."@@@";

    $results = $upNum / $downNum; 

    //echo $results."@@@";

    return $results;
}

function counter($counter)
{
    $multi = 1;
    for ($i=1; $i<=$counter; $i++)
    {
        $multi *= $i;
    }
    return $multi;
}