<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

echo "Hex Validation";
echo"\n";
echo"\n";
function isHex($strings){

   foreach ($strings as $testcase) {
       echo($testcase);
       echo"\n";
        if (ctype_xdigit(ltrim($testcase , "#"))) {
           echo "Contains only Hex";
       } else {
           echo "Is not Hex";

      } 
      echo"\n";
   }
}

$strings = array('#FFF', '#e3e3e3', '#ata910');
isHex($strings); // calling