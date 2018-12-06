<?php
$xml = new SimpleXMLElement('<users></users>');

$member = $xml->addChild('Member');
$member->addChild('Firstname','vv');
$member->addChild('Lastname','ff');
$member = $xml->addChild('Member');
$member->addChild('Firstname','vv');
$member->addChild('Lastname','ff');

header("Content-type: text/xml");
echo $xml->saveXML();