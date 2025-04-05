<?php
    echo "\n ---- имя файла и номер строки ---\n";
    $fileName1 = __FILE__;
    echo 'строка № ' . __LINE__ . ' файла ' . $fileName1 ."\n";
    $fileName2 = basename(__FILE__, '.php');
    echo 'строка № ' . __LINE__ . ' файла ' . $fileName2 ."\n";
    $fileName3 = $_SERVER['SCRIPT_NAME'];
    echo 'строка № ' . __LINE__ . ' файла ' . $fileName3 ."\n";

    echo "\n ---- многострочная строка heredoc ---\n";
    echo <<<HEREDOC
    Мама
        мыла
            раму...
    \n
    HEREDOC;

    echo "\n ---- Строковые переменные в строке ---\n";
    $a='Рыба';
    $b='человек';
    echo "$a рыбою сыта, а $b человеком\n(странаня фраза))))\n\n";