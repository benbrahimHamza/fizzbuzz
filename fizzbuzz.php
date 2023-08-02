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
        if (0 === $i % 15) {
            print("FizzBuzz \n");
            continue;
        }
        if (0 === $i % 3) {
            print("Fizz \n");
            continue;
        }
        if (0 === $i % 5) {
            print("Buzz \n");
            continue;
        }
        print("$i \n");
    }
