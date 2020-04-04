<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

echo "String Indentify";
echo"\n";
echo"\n";
function findDuplicates($str){
    if (!empty($str))
    {
        $max = 0;
        foreach (count_chars($str, 1) as $key => $val)
            if ($max < $val) {
                $max = $val;
                $i = 0;
                unset($letter);
                $letter[$i++] = chr($key);
            } else if ($max == $val)
                $letter[$i++] = chr($key);
        if (count($letter) === 1)
            echo 'The character the most repeated is "'.$letter[0].'"';
        else if (count($letter) > 1) {
            echo 'The characters the most repeated are : ';
            $count = count($letter);
            foreach ($letter as $key => $value) {
                echo '"'.$value.'"';
                echo ($key === $count - 1) ? '.': ', ';
            }
        }
    } else
        echo 'value passed to '.__FUNCTION__.' can\'t be empty';
}

$str  = 'ddaabbccccsdfefffffqqqqqqdddaaa';
findDuplicates($str);
