<?php
$domOBJ = new DOMDocument();
$domOBJ->load("http://scanvenger.herokuapp.com/");

$content = $domOBJ->getElementsByTagName("item");

foreach ($content as $data) {

    $top = $data->getElementsByTagName("top")->item(0)->nodeValue;
    $name = $data->getElementsByTagName("name")->item(0)->nodeValue;
    $score = $data->getElementsByTagName("scorer")->item(0)->nodeValue;
    $team = $data->getElementsByTagName("team")->item(0)->nodeValue;

    echo "
    <ul>
    <li>top: <strong>$top</strong></li>
    <li>name: <strong>$name</strong></li>
    <li>score: <strong>$score</strong></li>
    <li>team: <strong>$team</strong></li>
    </ul>";
}
