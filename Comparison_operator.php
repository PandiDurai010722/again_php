<?php 

$number1='10';
$number2=10;

if($number1==$number2){
    echo "Equal<br>";
}else {
    echo "Not Equal<br>";
}

if($number1===$number2){
    echo "Equal<br>";
}else {
    echo "Not Equal<br>";
}

if($number1!=$number2){
    echo "Equal<br>";
}else {
    echo "notEqual<br>";
}

if($number1<>$number2){
    echo "Equal<br>";
}else {
    echo "notEqual<br>";
}

if($number1!==$number2){
    echo "notequal<br>";
}else {
    echo "equal<br>";
}

$number3=40;
$number4=30;
if(($number3>=$number4) and ($number3==$number4)){
    echo "Equal";
}else{
    echo "notEqual";
}

?>