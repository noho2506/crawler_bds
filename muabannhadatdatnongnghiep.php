<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("http://www.muabannhadat.vn/dat-ban-dat-nong-nghiep-3533/tp-da-nang-s31?sf=dpo&so=d");

$tins = $html->find("div.body-content div.container div.row div.container div.row div.col-xs-12 div.pull-left div.list-group div.mbnd-item ");

echo count($tins);

foreach ($tins as $t) {
	$title = $t->find("div.mbnd-item-body div.row div.col-lg-12 a h2.mbnd-item-title",0)->innertext;

	$area = $t->find("div.mbnd-item-body div.row",3)->find("div.col-xs-3 p.mbnd-item-text",0)->plaintext;

	$price = $t->find("div.mbnd-item-body div.row",3)->find("div.col-xs-5 p.mbnd-item-price",0)->innertext;

	$location = $t->find("div.mbnd-item-body div.row",1)->find("div.col-lg-8 p.mbnd-item-text",0)->innertext;

	$district = $t->find("div.mbnd-item-body div.row",1)->find("div.col-lg-4 p.mbnd-item-text",0)->innertext;
	
	$district1 = str_replace('                      <b>','',$district);
	$district2 = str_replace('</b>','',$district1);
	
	
	$desc =$t->find("div.mbnd-item-body div.row",2)->find("div.col-lg-12 p.mbnd-item-text",0)->innertext;

	$time = $t->find("div.mbnd-item-body div.row",3)->find("div.col-xs-5 p.mbnd-item-text",0)->innertext;

	$time1 = str_replace('Ngày đăng<br />','',$time);
	$time2 = str_replace('                                      ','',$time1);
	$time3 = str_replace('      ','',$time2);
	$time4 = DateTime::createFromFormat('d/m/Y',$time3);
	$time5 = $time4->format('Y-m-d');
	

	$link = $t->find("div.mbnd-item-body div.row div.col-lg-12 a",0)->href;
	
	$link1 = "http://www.muabannhadat.vn".$link; //link chính , span ni ai them ri? t
	
	
	echo "<hr />";

	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$area = htmlentities($area, ENT_QUOTES,"UTF-8");
	$price = htmlentities($price, ENT_QUOTES, "UTF-8");
	$location = htmlentities($location, ENT_QUOTES, "UTF-8");
	//$district2 = htmlentities($district2, ENT_QUOTES, "UTF-8");
	$desc = htmlentities($desc, ENT_QUOTES,"UTF-8");
	$time5 = htmlentities($time5, ENT_QUOTES, "UTF-8");
	$link2 = htmlentities($link1, ENT_QUOTES, "UTF-8");
	
	$cat = 3;

	$get = file_get_html($link1); // cho nay bi sai. chay lai thu
 	$detail = $get->find("div.row div.description-area div.col-xs-12 div.box-description",0)->innertext;
 	//$detail = htmlentities($detail, ENT_QUOTES,"UTF-8");
 	$img = $get->find("div.body-content div.clearfix div.flexslider ul.slides li",0)->find("a.swipebox",0)->find("img",0)->src;
	$u = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($img);
	file_put_contents($u, file_get_contents($img));
	$tenFile = basename($img);

	$qr = "INSERT INTO lands(title, description, price, image, create_day,link, area , location, district, detail,id_cat) VALUES ('$title','$desc', '$price', '$tenFile' , '$time5','$link2','$area','$location','$district2', '$detail','$cat')";
+
 	$result2 = mysqli_query($mysqli, $qr);
}
?>