<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

echo "Password Validation";
echo "\n";

$username1="Aziz";
$username2="AzizKop";
$username=array($username1,$username2);
$rgxusername="/^[a-zA-Z]{7}$/";

echo "\n";
echo "UsernameCheck";
echo "\n";
foreach($username as $value){
    echo($value);
    echo"\n";
    if(preg_match($rgxusername,$value)){
        echo 'macthed';
    }
    
    else{
        echo'not macthed';
    }
    echo"\n";
    echo"\n";
}

$password1="AkusuKakamu1";
$password2="Aku";
$password=array($password1,$password2);
$rgxpassword="/^(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])[a-zA-Z\d]{9,15}$/";
 
echo "\n";
echo "PasswordCheck";
echo "\n";
foreach($password as $value){
    echo($value);
    echo"\n";
    if(preg_match($rgxpassword,$value)){
        echo 'macthed';
    }
    
    else{
        echo'not macthed';
    }
    echo"\n";
    echo"\n";
}
?>