<?php

$code = '<?php $a <=> $b;';

echo "Tokens for\n    ", $code, "\n\n";

$tokens = token_get_all($code);
foreach ($tokens as $token) {
    if (is_array($token)) {
        echo token_name($token[0]), ' (', $token[0], '): ', $token[1], "\n";
    } else {
        echo $token, "\n";
    }
}

echo "\n\nT_SPACESHIP constant: ", T_SPACESHIP;
