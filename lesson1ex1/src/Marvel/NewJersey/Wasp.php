<?php

namespace Marvel\NewJersey;

class Wasp {
    public static function whoami() {
        $names = __CLASS__;
        $names = explode("\\", $names);
        $count = count($names);
        return "I am ".$names[$count-1]." from ".$names[$count-2].".\n";
    }
}

echo Wasp::whoami();