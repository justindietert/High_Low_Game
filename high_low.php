<?php

do {
    $random = rand(1, 100);

    do {
        fwrite(STDOUT, 'What number am I thinking of from 1 to 100? ');
        $guess = trim(fgets(STDIN));

        if (!is_numeric($guess)) {
                fwrite(STDOUT, "$guess is not a number. Guess a numeral from 1 to 100 only.\n");
            } elseif ($guess < 1 || $guess > 100) {
                fwrite(STDOUT, "$guess is out of range. Guess a numeral from 1 to 100 only.\n");
            } elseif ($guess < $random) {
                fwrite(STDOUT, "$guess is wrong. Guess HIGHER.\n");
            } elseif ($guess > $random) {
                fwrite(STDOUT, "$guess is wrong. Guess LOWER.\n");
            } else {
                fwrite(STDOUT, "Correct! My number is $guess!\n");
                fwrite(STDOUT, "Enter 'y' to play again. Enter any other character to exit. ");
                $answer = trim(fgets(STDIN));
                if ($answer != "y") {
                    exit(0);
                }
            }

    } while ($guess != $random);

} while ($answer == "y");