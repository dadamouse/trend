<?php
    function solution($S)
    {
        if (empty($S)) return -1;

        $splitString = explode(" ", $S);
        if (!empty($splitString))
        {
            $stack = [];
            foreach ($splitString as $val)
            {
                if (is_numeric($val))
                {
                    $stack[] = $val;
                }
                else if ("DUP" == $val)
                {
                    if (!empty($stack))
                    {
                        $getNumber = array_pop($stack);
                        if (is_numeric($getNumber))
                        {
                            $stack[] = $getNumber;
                            $stack[] = $getNumber;
                        }
                        else
                        {
                            return -1;   
                        }
                    }
                    else
                    {
                        return -1;   
                    }
                }
                else if ("POP" == $val)
                {
                    if (!empty($stack))
                    {
                        array_pop($stack);
                    }
                    else
                    {
                        return -1;   
                    }
                }
                else if ("PUSH" == $val)
                {
                    if (!empty($stack))
                    {
                        $stack[] = $val;   
                    }
                    else
                    {
                        return -1;   
                    }
                }
                else if ("+" == $val)
                {
                    if (!empty($stack))
                    {
                        $getNumber1 = array_pop($stack);
                        $getNumber2 = array_pop($stack);
                        if (is_numeric($getNumber1) && is_numeric($getNumber2))
                        {
                            $stack[] = $getNumber1 + $getNumber2;
                        }
                        else
                        {
                            return -1;   
                        }
                    }
                    else
                    {
                        return -1;   
                    }
                }
                else if ("-" == $val)
                {
                    if (!empty($stack))
                    {
                        $getNumber1 = array_pop($stack);
                        $getNumber2 = array_pop($stack);
                        if (is_numeric($getNumber1) && is_numeric($getNumber2))
                        {
                            $stack[] = $getNumber1 - $getNumber2;
                        }
                        else
                        {
                            return -1;   
                        }
                    }
                    else
                    {
                        return -1;   
                    }
                }
            }
        }

        if (!empty($stack))
        {
            return array_pop($stack);
        }
        else
        {
            return -1;
        }
    }
?>