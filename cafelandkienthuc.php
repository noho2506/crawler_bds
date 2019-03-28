<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("https://cafeland.vn/kien-thuc/kien-thuc-bat-dong-san/47/");

$tins = $html->find("div.wrap-main div.container div.left-col div.block div.page-content div.box-content ul.list-type-14 li");

foreach ($tins as $t) {
echo $link = $t->find("h3 a",0)->href;
}

?>