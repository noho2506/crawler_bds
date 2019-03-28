<?php
require "dbCon.php";
require "simple_html_dom.php";

$get = file_get_html("https://kenhbds.vn/thong-tin/quy-hoach-khu-dat-dau-gia-gan-66-000m2-tai-thuong-tin.html");

$title = $get->find("div#page_content h1.article_title",0)->innertext;
	

$time = $get->find("div.article_time",0)->innertext;

$desc = $get->find("h2.article_excerpt",0)->innertext;
$img =$get->find("img",1)->src;


$u = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($img);
file_put_contents($u, file_get_contents($img));
$tenFile = basename($img);
	
$detail = $get->find("div.article_content p",2)->innertext;









// $address = $html->find("div.slide-content span",0)->innertext;

// echo $desc = $html->find("div.slide-content ul",0)->innertext;
// $tins = $html->find("div.container div.row div.col-md-9 div.project div.row div.col-md-4");

// echo count($tins);

// foreach ($tins as $t) {
// 	$link = $t->find("div.project-top div.project-content h3.head-pro a",0)->href;

// 	$get = file_get_html($link);

// 	echo $intro4 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",2)->find("a.prettyphoto img",0)->src;
// 	$u4 = 'duan/'.basename($intro4);
// 	file_put_contents($u4, file_get_contents($intro4));
// 	$tenFile4 = basename($intro4);

// }























//$intro1 = $get->find("div.content-introduce div.col-md-12 a.prettyphoto img.image-size",0)->src;

//$intro2 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",0)->find("a.prettyphoto img",0)->src;
//$intro3 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",1)->find("a.prettyphoto img",0)->src;

//echo $intro4 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",2)->find("a.prettyphoto img",0)->src;

//$intro5 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",3)->find("a.prettyphoto img",0)->src;

//$tienich1 = $get->find("div#utility div.col-md-6",0)->find("a.prettyphoto img",0)->src;

//$tienich2 = $get->find("div#utility div.col-md-6",1)->find("a.prettyphoto img",0)->src;

//$tienich3 = $get->find("div#utility div.utility-image div.col-md-12",0)->find("a.prettyphoto img",0)->src;

//$tienich4 = $get->find("div#utility div.col-md-6",2)->find("a.prettyphoto img",0)->src;

//$tienich5 = $get->find("div#utility div.col-md-6",3)->find("a.prettyphoto img",0)->src;

//$vitri = $get->find("div.content-location div.image-map img",0)->src;

//echo "<img src='$img1' />";

//echo $detail = $html->find("div.row div.description-area div.col-xs-12 div.box-description",0)->innertext;
// foreach ($tins as $t) {
// 	echo $title = $t->innertext;
// 	echo "<hr />";
// 	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
// 	$qr ="INSERT INTO district(name) VALUES('$title')";
// 	$ketqua = $mysqli->query($qr);
// 	if($ketqua){
// 		$sel_qr = 'SELECT * from district';
// 		$sel_res = $mysqli->query($sel_qr);
// 		while($ar = $sel_res->fetch_assoc()){
// 			$id = $ar['id'];
// 			$title = $ar['name'];
// 			echo $title;
// 		}
// 	}
// 	if($mysqli->query($qr) == TRUE){
// 		echo "<br /> Thêm data thành công";
// 	}else{
// 		echo "Lỗi: ".$qr."<br />".$mysqli->error;
// 	}
// }
//

?>



<!-- https://kenhbds.vn/thong-tin/tin-tuc-su-kien -->