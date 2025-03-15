<?php

function evaluateQuize(array $questions, array $answers): int{
    $score = 0;
    foreach($questions as $index => $question){
        if ($answers [$index]=== $question['correct']){
            $score++; 
        }
    }
    return $score;
}

$questions =[
    ['questions'=>'what is 2+2', 'correct'=>'4'],
    ['questions'=>'what is capital of Bangladesh', 'correct'=>'Dhaka'],
    ['questions'=>'what is 2+5', 'correct'=>'7']
];

$answers = [];

foreach($questions as $index=> $question){
    echo($index+1). "." .$question['questions']. "\n";
    $answers[] = trim(readline("Your Answre : "));
}

$score = evaluateQuize($questions, $answers);
// $score =3;

echo "\nYou Scored $score out of " . count($questions). ".\n";

if($score === count($questions)){
    echo "Excellent Job!\n";
}elseif($score>=1){
    echo"Good Effort \n";
}else{
    echo "You are Failed \n";
}