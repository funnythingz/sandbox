<?php

$hoge = <<<EOT
ほげ🌸
http://abd 💩ほげ
ほげ
EOT;

var_dump(mb_strlen($hoge, 'utf-8'));
var_dump(mb_strlen($hoge, 'utf-16'));

var_dump(preg_split("//u", $hoge, -1, PREG_SPLIT_NO_EMPTY));
var_dump(preg_split("//u", $hoge, -1, PREG_SPLIT_DELIM_CAPTURE));
#var_dump(preg_split("//u", $hoge, -1, PREG_SPLIT_OFFSET_CAPTURE));
