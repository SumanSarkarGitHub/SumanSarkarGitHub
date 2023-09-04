<?php

function fibonacci_iterative($n) {
    $fib = array(0, 1);

    for ($i = 2; $i <= $n; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }

    return $fib;
}

$n = 10;  // Change this value to generate a different length of Fibonacci series
$fib_sequence = fibonacci_iterative($n);

echo "First $n numbers in Fibonacci series are: \n";
foreach ($fib_sequence as $value) {
    echo $value . " ";
}

?>
