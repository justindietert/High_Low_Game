<?php

if ($argc == 3) {
    do {
        $random = rand($argv[1], $argv[2]);

        do {
            fwrite(STDOUT, "What number am I thinking of from $argv[1] to $argv[2]? ");
            $guess = trim(fgets(STDIN));

            if (!is_numeric($guess)) {
                    fwrite(STDOUT, "$guess is not a number. Guess a numeral from $argv[1] to $argv[2] only.\n");
                } elseif ($guess < $argv[1] || $guess > $argv[2]) {
                    fwrite(STDOUT, "$guess is out of range. Guess a numeral from $argv[1] to $argv[2] only.\n");
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

} else {
    echo "Enter 2 arguments only.";
}