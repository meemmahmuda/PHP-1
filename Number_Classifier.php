<?php

echo " Enter a number : ";

$number = (int) readline();

if ($number>0){
    echo "The number is positive \n";
}elseif($number<0){
    echo "The number is negetive \n";
}else{
    echo "The number is zero \n";
}