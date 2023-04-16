<?php
//xml hay json deu la luu tru du lieu co cau truc trong tep hoac trong csdl
//simplexml: dung de phan tich cu phap
$myXMLData =
    "<?xml version='1.0' encoding='UTF-8'?>
<note>
    <to>Tove</to>
    <from>Jani</from>
    <headingReminder< /heading>

        <body>Don't forget me this weekend!</body>
</note>
";
$xml = simplexml_load_string($myXMLData) or die("Couldn't load");
