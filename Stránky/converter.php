<?php
class XMLConverter{
    static private $dom = NULL;
    static function convertHtmlToXml ($html){
        /*** a new dom object ***/
        $dom = new domDocument;

        /*** load the html into the object ***/
        $dom->loadHTML($html);

        /*** discard white space ***/
        $dom->preserveWhiteSpace = false;

    }
}
?>