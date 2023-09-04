<?php

function fibonacci_recursive($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci_recursive($n-1) + fibonacci_recursive($n-2);
    }
}

$n = 10;  // Change this value to generate a different length of Fibonacci series

echo "First $n numbers in Fibonacci series are: \n";
for ($i = 0; $i < $n; $i++) {
    echo fibonacci_recursive($i) . " ";
}

?>
