<?php
$number = [1,2,3,4,5,6,7,8,9,10];

function squre($num){
   printf("Squre if %d is %d\n",$num,$num*$num);
}
function cube($num){
   return $num*$num*$num;
}
print_r($number);
array_walk($number,'squre');
$new_number = array_map('cube',$number);
print_r($new_number);

function even($num){
    if($num%2 == 0)
    {
        return true;
    }
}
function odd($num){
    if($num%2 == 1)
    {
        return true;
    }
}
$even_number = array_filter($number,'even');
$odd_number = array_filter($number,'odd');
print_r($even_number);
print_r($odd_number);

function sum($oldValue, $newValue){
    return $oldValue + $newValue;
}
$sum = array_reduce($number, 'sum');
echo $sum;

$marks = array(85,75,65,55,45,35,25,15,5);
list($sami,$doni,$pkd,$sumon,$labib) = $marks;

echo $labib;

?>