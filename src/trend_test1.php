<?php
    function solution($S)
    {
        $count = -1;
        if (preg_match_all('/([a-z]*[A-Z]+[a-z]*|[A-Z]+[a-z]*|[a-z]*[A-Z]+)/', $S, $matches))
        {
            $lists = end($matches);

            if (!empty($lists))
            {
                //should return longest password
                usort($lists, function($a, $b) {
                    return strlen($b) - strlen($a);
                });
                
                foreach ($lists as $word)
                {
                    $count = checkIsValid($word);
                    return $count;
                }
            }
        }
        return $count;
    }

    function checkIsValid($word)
    {
        $count = 0;
        $wLength = strlen($word);
        for ($i=0; $i<$wLength-1; $i++)
        {
            for($j=$i+1; $j<=$wLength; $j++)
            {
                $testStr = substr($word, $i, $j);
                if (preg_match('/[A-Z]/', $testStr))
                {
                    $count++;

                    //echo $testStr."\n";
                }
            }
        }
        return $count;
    }