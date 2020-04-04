<?php
/******************************************************************************

Welcome to GDB Online.
GDB online is an online compiler and debugger tool for C, C++, Python, Java, PHP, Ruby, Perl,
C#, VB, Swift, Pascal, Fortran, Haskell, Objective-C, Assembly, HTML, CSS, JS, SQLite, Prolog.
Code, Compile, Run and Debug online from anywhere in world.

*******************************************************************************/

echo "MY BIODATA";
echo "\n";

$name="AZIZ";
$age="25";
$hobbies=array("Olahraga", "Travelling","Programer");
$is_married=false;
$school=array("SMA"=>array("name"=>"SMA Al Irsyad", "Tahun Masuk"=>"2010","Tahun Lulus"=>"2013", "Major"=>"Sains"),"S1"=>array("name"=>"UNSOED", "Tahun Masuk"=>"2013","Tahun Lulus"=>"2017", "Major"=>"Peternakan"));
$skills=array("PHP"=>array("level"=>"beginner"),"Javascript"=>array("level"=>"beginner"));
$interest_in_coding=true;
// function myBiodata($name,$age){
    $data = array("name"=>$name, "age"=>$age, "hobbies"=>$hobbies,"is_married"=>$is_married,"school"=>$school,"skills"=>$skills,"interest_in_coding"=>$interest_in_coding);
    echo json_encode($data);
// }