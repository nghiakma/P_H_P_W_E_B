<?php
//xml hay json deu la luu tru du lieu co cau truc trong tep hoac trong csdl
//simplexml: dung de phan tich cu phap

//$xml = simplexml_load_string($myXMLData) or die("Couldn't load");
$xml = simplexml_load_file('/view/note.xml') or die("Couldn't load");
print_r($xml);
