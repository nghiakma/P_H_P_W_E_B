<?php
//JSON: la mot cu phap de luu tru va trao doi du lieu
// la mot dinh dang van ban nen no co the de dang dc gui den va di tu may chu
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

echo json_encode($age);
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

//var_dump(json_decode($jsonobj));
$obj = json_decode($jsonobj);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
//theo loop
foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}
//ma hoa: mac dinh se tra ve mot object, con neu muon tra ve mot mang thi them : true