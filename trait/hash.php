<?php

trait hashFactory {
    function createHashFromTime() {
        return hash('md5', time());
    }

    function touchHash() {
        touch($this->createHashFromTime());
    }
}

class HashMan {
    use hashFactory;
}

$hashMan = new HashMan();
$hashMan->touchHash();
