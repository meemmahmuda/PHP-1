<?php

echo "Enter units Consumed :";
$units = (int) readline();

if ($units <= 100){
    $bill = $units * 5;
}elseif ($units <=200){
    $bill = 100 * 5 + ($units -100) * 10;
}else {
    $bill = 100 * 5 + 100 * 10 + ($units - 200) * 15;
}

echo "Total bill is $bill ";
