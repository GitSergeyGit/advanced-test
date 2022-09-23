<?php
function inverse($x) {
//    if (!$x) {
//        throw new InvalidArgumentException('Деление на ноль.');
//    }
//    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $exception) {
    echo $exception->getMessage() . '<br>';
} finally {
    echo "Второй блок finally.\n";
}
