<?php
    // $variable = 3.14;
    // $variable = 3;
    // $variable = 'one';
    // $variable = true;
    // $variable = null;
    $variable = [];

    echo "\n ---- Решение через if ---\n";
    if (is_null($variable)) {
        echo "Переменная типа: null\n";
    } elseif (is_int($variable)) {
        echo "Переменная типа: int\n";
    } elseif (is_float($variable)) {
        echo "Переменная типа: float\n";
    } elseif (is_bool($variable)) {
        echo "Переменная типа: bool\n";
    } elseif (is_string($variable)) {
        echo "Переменная типа: string\n";
    }else {
        echo "Переменная типа: other\n";
    }

    echo "\n ---- Решение через swith ---\n";
    switch (true) {
        case is_null($variable):
            $typeValue = 'null';
            break;
        case is_int($variable):
            $typeValue = 'int';
            break;
        case is_float($variable):
            $typeValue = 'float';
            break;
        case is_bool($variable):
            $typeValue = 'bool';
            break;
        case is_string($variable):
            $typeValue = 'string';
            break;
        default:
            $typeValue = 'other';
            break;
    }
    echo "Переменная типа: $typeValue\n\n";