<?php

include('index.html');

$html = file_get_contents('index.html');
$css = file_get_contents('style.css');
$js = file_get_contents('script.js');

$nb_green = mb_substr_count($css, "green");
echo "<div style='visibility: hidden;'>";

if ($nb_green >= 1) {
    echo("TECHIO> success true \r\n");
    echo("TECHIO> message --channel Super! Tu as trouvé la bonne solution. \r\n");
} else {
    echo("TECHIO> success false  \r\n");
	echo("TECHIO> message --channel Dommage! Le style, ça se passe dans la feuille de style ! Es-tu allé voir là-bas ? \r\n");
}




echo "</div>";

?>