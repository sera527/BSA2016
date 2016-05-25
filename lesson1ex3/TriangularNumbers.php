<?php
function triangularNumbersGenerator(){
    for($i=0;$i<15;$i++){
        yield 0.5 * $i * ($i+1);
    }
}
foreach(triangularNumbersGenerator() as $nTriangular){
    echo $nTriangular." ";
}