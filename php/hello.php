<?php

class Greeting {

    static public function yo() {

        $message = ($_GET['yo'])? $_GET['yo'] : 'yo';

        return htmlspecialchars($message);

    }

}

echo Greeting::yo();
