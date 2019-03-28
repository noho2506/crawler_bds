<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("https://duan.muabannhadat.vn/khu-do-thi-homeland-paradise-village-da-nang.html");

$phan1 = $html->find("div#introduce div.introduce-text h2.text-title",0)->innertext;

$dong1 = $html->find("div.intro-content p#gioi-thieu",0)->innertext;

$dong2 = $html->find("div.intro-content p.text-justify",1)->innertext;

$mucluc = $html->find("div.intro-content h2.h3",0)->innertext;

$mucluc1 = $html->find("div.intro-content ol",0)->innertext;

$canbiet = $html->find("div.intro-content h3#can-biet",0)->innertext;

$ul = $html->find("div.intro-content ul",1)->innertext;

$phan2 = $html->find("div#utility h2.text-title",0)->innertext;

$dong11 = $html->find("div.intro-content p#tien-ich-du-an",0)->innertext;

$dong22 = $html->find("div.col-md-12 div.intro-content p",1)->innertext;

$dong33 = $html->find("div.col-md-12 div.intro-content ul",0)->innertext;

$dong44 = $html->find("div.col-md-12 div.intro-content p",2)->innertext;

$nhuoc = $html->find("div.col-md-12 div.intro-content h3#uu-nhuoc-diem",0)->innertext;

$dong55 = $html->find("div.col-md-12 div.intro-content p",3)->innertext;

$dong66 = $html->find("div.col-md-12 div.intro-content ul",1)->innertext;

$vitri = $html->find("div.content-location h2",0)->innertext;

$dong7 = $html->find("div.content-location div.intro-content p",0)->innertext;

$dong8 = $html->find("div.content-location div.intro-content p",1)->innertext;

$dong9 = $html->find("div.content-location ul",0)->innertext;

echo $ok = $phan1.$dong1.$dong2.$mucluc.$mucluc1.$canbiet.$ul.$phan2.$dong11.$dong22.$dong33.$dong44.$nhuoc.$dong55.$dong66.$vitri.$dong7.$dong8.$dong9;

$image1 = $html->find("div.content-design div.col-md-12 div.tab-content div.item img",0)->src;
echo "<img src='$image'/>";

$image2 = $html->find("div.content-location div.image-map img",0)->src;
?>