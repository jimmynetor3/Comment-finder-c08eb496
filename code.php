<?php

echo "Starting demo";

// Get the first command line arg
$input = $argv[1];
/* If there's no input
 We don't want to continue
 */
if (strlen($input) === 0) {
    echo "NOOO input";
    exit(-1); // Exit with NOK exit code
}

/**
 * Well this is a fake example file so not really gonna put a lot of code in here.
 */
