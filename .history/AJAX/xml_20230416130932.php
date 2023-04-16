<?php
$q = $_GET["q"];
//dung domdocument de tai file xml len
$xmlDoc = new DOMdocument();
$xmlDoc->load("cd_catalog.xml");
