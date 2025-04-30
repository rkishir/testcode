<?php
echo "this is testphp.php\n";
echo "First PR from php to main\n";

// Wrote a program to print the first 10 numbers of the Fibonacci series
function fibonacci($n) {
    $fib = array(0, 1);
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}
$fibSeries = fibonacci(10);
echo "Fibonacci series: " . implode(", ", $fibSeries) . "\n";
?>