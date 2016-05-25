<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 28.05.2015
 * Time: 14:20
 */
trait RandomQuote {
    public function getRandomQuote(){
        $quotes = array("The secret of getting ahead is getting started.",
            "Success is a lousy teacher. It seduces smart people into thinking they can't lose.",
            "Your most unhappy customers are your greatest source of learning.",
            "I cook with wine, sometimes I even add it to the food.",
            "Drawing on my fine command of the English language, I said nothing.",
            "A man of personality can formulate ideals, but only a man of character can achieve them.");
        return $quotes[rand(0, count($quotes)-1)];
    }
}