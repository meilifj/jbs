<?php

/**
 * 数字格式化测试类
 * @author jiangbs
 */

require __DIR__ . '/../vendor/autoload.php';

$number = '102400010';
echo \jbs01\NumberFormat::byte_format($number);

//输出：97.7 MB