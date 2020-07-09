<?php

$numbers = range(3, 103);

foreach ($numbers as $number) {
    echo "Current Number <span class=\"badge badge-primary\">{$number}</span>: is divisible by ";
    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "<span class=\"badge badge-primary\">both three and five</span><br/>";
        continue;
    } elseif ($number % 5 == 0) {
        echo "<span class=\"badge badge-primary\">five</span><br/>";
    } elseif ($number % 3 == 0) {
        echo "<span class=\"badge badge-primary\">three</span><br/>";
    } else {
        echo "{$number}<br/>";
    }
}
