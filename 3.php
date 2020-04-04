<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

echo "DIVIDE ARRAY";
echo "\n";

$input_array = range(1,5);
print_r($input_array);

echo "\n";
for($i = 1; $i < 4; $i++) {
        $divide = $i;
        print_r(array_chunk($input_array, $i));
    }

?>