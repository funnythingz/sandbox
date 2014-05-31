<?php

final class Ipe {

    private $closeHeart = true;

    public function isCloseHeart() {
        return $this->closeHeart;
    }
    
}

final class Keitan {

    public function iceBreakHeart($ipeInstance) {
        if($ipeInstance instanceof Ipe) {
            return 'ipe\'s heart break is succeed!';
        }

        return 'not ipe!!';
    }
}

$ipe = new Ipe();
$keitan = new Keitan();

echo $keitan->iceBreakHeart($ipe);
