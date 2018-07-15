<?php
$fl = file_get_contents('http://sc-atr.1.fm:7704/');
function antara($string, $start, $end){
$string = " ".$string;
$ini = strpos($string,$start);
if ($ini == 0) return "";
$ini += strlen($start);
$len = strpos($string,$end,$ini) - $ini;
return substr($string,$ini,$len);
}
$song = antara($fl, "<td>Current Song:</td>\n<td class=\"streamdata\">", "</td>");
echo "",$song;
?>