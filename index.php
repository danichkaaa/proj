<?php
$result = [];
$first = 'test';
$second = 'тест';
$list = [8,
    1 => [
        1,2,'three' => 3,4
    ],
    2 => [1,2,3],
    [
        1,2,3,4,5
    ]
];
$obj = new \Exception();
is_array($list);
foreach ($list as $key => $value) {
    if (is_array($value)) {
        foreach ($value as $key1 => $value1) {
            $result[$key1] = $value1 * 3;
        }
    }else {
        $result[$key] = $value * 3;
    }
}
var_export($result);