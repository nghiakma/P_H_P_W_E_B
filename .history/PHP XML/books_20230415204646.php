<?php
$xml = simplexml_load_file("books.xml") or die("Error: Cannot create object");
// echo $xml->book[0]->title . "<br>";
// echo $xml->book[1]->title;
foreach ($xml->children() as $books) {
    echo $books->title . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br>";
}
