<?php
/**
 * Created by IntelliJ IDEA.
 * User: Djonathas
 * Date: 06/05/2015
 * Time: 00:43
 */

include_once('simple_html_dom.php');

$noticias = [];
$famoso = "roberto-carlos";
$page = 1;

$html = file_get_html("http://ego.globo.com/api/ultimas/todas/famosos/tudo-sobre/$famoso/90x68/$page/20.json");
$buscaNoticias = json_decode($html)->ultimas;

while (count($buscaNoticias) > 0) {
    $noticias = array_merge($noticias, $buscaNoticias);
    $page++;

    $html = file_get_html("http://ego.globo.com/api/ultimas/todas/famosos/tudo-sobre/$famoso/90x68/$page/20.json");
    $buscaNoticias = json_decode($html)->ultimas;
}

echo utf8_encode("<b>Quant. de páginas: " . ($page-1)*2 . " | Quant. de notícias: " . count($noticias)) . "</b>";

foreach($noticias as $noticia) {
    echo "<p><b>Titulo:</b> $noticia->titulo<br>";
    echo "<b>URL:</b> $noticia->permalink</p>";
}

?>
