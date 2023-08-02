<?php
    // Get the max N value
    $stdin = fopen("php://stdin", "r");
    print("To which number should we count ?\n");
    $maxNumber = (int)(fgets($stdin));
    fclose($stdin);

    // Error handling
    if (!is_int($maxNumber) || $maxNumber < 1) {
        throw new Exception('Not a valid integer number.');
    }

    print("Counting to $maxNumber !\n");

    for ($i = 1; $i <= $maxNumber; $i++) {
        if ($i % 5 == 0 && $i % 3 == 0) {
            print("FizzBuzz \n");
        } elseif ($i % 3 == 0) {
            print("Fizz \n");
        } elseif ($i % 5 == 0) {
            print("Buzz \n");
        } else {
            print("$i \n");
        }
    }
