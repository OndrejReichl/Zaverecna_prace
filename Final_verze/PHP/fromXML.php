<?php
if(ISSET($_FILES["myFile"])){
    echo "it loaded.";
    $xml=simplexml_load_file($_FILES["myFile"]["tmp_name"]);
    $tabulka = $xml->getName();
    //$element = $xml->c
    echo $xml->count();
    for ($i = 0; $i < $xml->count(); $i++){
        print_r($xml->children($i));
         }



}
else{
    echo "Something is wrong.";
}





/**
 * Created by PhpStorm.
 * User: Andrew
 * Date: 29.10.2018
 * Time: 21:31
 */

?>