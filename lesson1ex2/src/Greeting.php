<?php
require __DIR__ . '/../vendor/autoload.php';
class Greeting {
    use RandomQuote;
    function say($name){
        echo "Hi, ".$name."! There is a new quote for you:\n".$this->getRandomQuote();
    }
}
$a = new Greeting();
$a->say("Sergiy");