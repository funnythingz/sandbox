<?php

class FizzBuzz {

    static private function yo($num) {

        $result = '';

        if($num == 0) {
            return NULL;
        }

        if($num % 3 == 0) {
            $result .= 'Fizz';
        }

        if($num % 5 == 0) {
            $result .= 'Buzz';
        }

        return $result;

    }

    static public function commandYo() {

        $result = 'please input to argument';

        if(count($GLOBALS['argv']) > 1) {

            $result = array();

            foreach($GLOBALS['argv'] as $val) {

                $res = FizzBuzz::yo($val);

                if(!is_null($res)) {
                    array_push($result, $res);
                }

            }
        }

        return $result;

    }
}

var_dump(FizzBuzz::commandYo());
