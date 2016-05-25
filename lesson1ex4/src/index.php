<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28.05.2015
 * Time: 12:39
 */
require __DIR__ . '/../vendor/autoload.php';
class Application {
    use RandomQuote;
    function __construct(){
        $this->run();
    }
    function run(){
        if($_SERVER['HTTP_HOST']=="localhost:8000"){
            echo $this->getRandomQuote();
        }
    }
}
$a = new Application();