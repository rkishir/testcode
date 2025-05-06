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


$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    echo str_repeat("*", $i) . PHP_EOL;
}

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // Print spaces
    echo str_repeat(" ", $rows - $i);

    // Print stars
    echo str_repeat("*", 2 * $i - 1);

    echo PHP_EOL;
}

?>