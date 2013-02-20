
 
<?php

$doc = new DOMDocument;
$doc->loadHTMLFile('http://results.vtu.ac.in/vitavi.php?submit=true&rid=4pa09cs031');
$items = $doc->getElementsByTagName('b');
for ($i = 2; $i < 6; $i++) {
    echo $items->item($i)->nodeValue . "<br/>";
}
$items = $doc->getElementsByTagName('td');
for ($i = 55; $i < 110; $i++) {
    echo $items->item($i)->nodeValue . "<br/>";
}

?>




