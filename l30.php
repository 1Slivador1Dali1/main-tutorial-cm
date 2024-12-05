<?php
echo strlen('абвгд'); // Выведеь 10 в не 5
echo '<br>';
echo mb_strlen('абвгд'); // Выведет 5
echo '<br>';

//ex
$str = 'ДалиСли';
echo strlen($str) . ' ' . mb_strlen($str);
