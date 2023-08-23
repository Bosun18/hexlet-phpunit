<?php

namespace Hexlet\Phpunit\Utils;

// Эта функция переворачивает переданную строку
function reverseString($string): string
{
    return (string)implode(array_reverse(str_split($string)));
}
