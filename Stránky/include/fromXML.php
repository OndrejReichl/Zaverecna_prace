<?php
if(ISSET($_FILES["myFile"])){
    echo "it loaded.";
    $xml=simplexml_load_file($_FILES["myFile"]["tmp_name"]);
    print_r($xml);
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