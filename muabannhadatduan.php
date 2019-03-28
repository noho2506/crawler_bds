<?php
require "dbCon.php";
require "simple_html_dom.php";

$html = file_get_html("https://duan.muabannhadat.vn/tim-kiem/da-nang/dat-nen-phan-lo/tat-ca-gia");

$tins = $html->find("div.container div.row div.col-md-9 div.project div.row div.col-md-4");

echo count($tins);

foreach ($tins as $t) {
	$title = $t->find("div.project-top div.project-content h3.head-pro a",0)->innertext;

	$seller = $t->find("div.project-top div.project-cat p",2)->find("a",0)->innertext;

	$img = $t->find("div.project-top div.project-image a img.attachment-index",0)->src;

	$link = $t->find("div.project-top div.project-content h3.head-pro a",0)->href;

	$u = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($img);
	file_put_contents($u, file_get_contents($img));
	$tenFile = basename($img);
	$title = htmlentities($title, ENT_QUOTES, "UTF-8");
	$seller = htmlentities($seller, ENT_QUOTES, "UTF-8");
	$img = htmlentities($img, ENT_QUOTES, "UTF-8");
	$link1 = htmlentities($link, ENT_QUOTES, "UTF-8");
	// echo "<img src='$img' />";
	
	echo "<br />";
	// $get = file_get_html($link);
	// $detail1 = $get->find("div.intro-content h3#can-biet",0)->innertext;
	// $detail2= $get->find("div.intro-content ul",0)->innertext;
	// $detail = $detail1.$detail2;
	
	//$detail2 = $get->find("")

	$get = file_get_html($link);

	$address = $get->find("div.slide-content span",0)->innertext;

	$desc = $get->find("div.slide-content ul",0)->innertext;

	$tongquan = $get->find("div#introduce div.introduce-text h2.text-title",0)->innertext;

	$tongquan = str_replace('<img                                     src="https://duan.muabannhadat.vn/wp-content/themes/themenhadat/image/icon-introduce.png">','<h4><i class="fa fa-arrow-circle-right"></i>',$tongquan);
	$tongquan = $tongquan.'</h4>';

	$dong1 = $get->find("div.intro-content p#gioi-thieu",0)->innertext;

	$dong2 = $get->find("div.intro-content p.text-justify",1)->innertext;

	$mucluc = $get->find("div.intro-content h2.h3",0)->innertext;

	$mucluc1 = $get->find("div.intro-content ol",0)->innertext;

	$canbiet = $get->find("div.intro-content h3#can-biet",0)->innertext;

	$ul = $get->find("div.intro-content ul",1)->innertext;

	//
	$detail1 = $tongquan.'<br />'.$dong1.'<br />'.$dong2.'<br />'.$mucluc.'<br />'.$mucluc1.'<br />'.$canbiet.'<br />'.$ul.'<br />';

	$uunhuoc = $get->find("div#utility h2.text-title",0)->innertext;

	$uunhuoc = str_replace('<img                                     src="https://duan.muabannhadat.vn/wp-content/themes/themenhadat/image/icon-unity.png">','<h4><i class="fa fa-user-md"></i>',$uunhuoc);
	$uunhuoc = $uunhuoc.'</h4>';

	$dong11 = $get->find("div.intro-content p#tien-ich-du-an",0)->innertext;

	$dong22 = $get->find("div.col-md-12 div.intro-content p",1)->innertext;

	$dong33 = $get->find("div.col-md-12 div.intro-content ul",0)->innertext;

	$dong44 = $get->find("div.col-md-12 div.intro-content p",2)->innertext;

	$nhuoc = $get->find("div.col-md-12 div.intro-content h3#uu-nhuoc-diem",0)->innertext;

	$dong55 = $get->find("div.col-md-12 div.intro-content p",3)->innertext;

	$dong66 = $get->find("div.col-md-12 div.intro-content ul",1)->innertext;

	//
	$detail2 = $uunhuoc.'<br />'.$dong11.'<br />'.$dong22.'<br />'.$dong33.'<br />'.$dong44.'<br />'.$nhuoc.'<br />'.$dong55.'<br />'.$dong66.'<br />';

	$vitri = $get->find("div.content-location h2",0)->innertext;

	$vitri = str_replace('<img                                     src="https://duan.muabannhadat.vn/wp-content/themes/themenhadat/image/icon-location.png">','<h4><i class="fa fa-map-marker"></i>',$vitri);
	$vitri = $vitri.'</h4>';

	$dong7 = $get->find("div.content-location div.intro-content p",0)->innertext;

	$dong8 = $get->find("div.content-location div.intro-content p",1)->innertext;

	$dong9 = $get->find("div.content-location ul",0)->innertext;

	$detail3 = $vitri.'<br />'.$dong7.'<br />'.$dong8.'<br />'.$dong9.'<br />';

	// $img1 = $get->find("div.content-design div.col-md-12 div.tab-content div.item img",0)->src;

	// $img2 = $get->find("div.content-location div.image-map img",0)->src;

	


	$intro1 = $get->find("div.content-introduce div.col-md-12 a.prettyphoto img.image-size",0)->src;
	$u1 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($intro1);
	file_put_contents($u1, file_get_contents($intro1));
	$tenFile1 = basename($intro1);

	$intro2 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",0)->find("a.prettyphoto img",0)->src;
	$u2 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($intro2);
	file_put_contents($u2, file_get_contents($intro2));
	$tenFile2 = basename($intro2);

	$intro3 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",1)->find("a.prettyphoto img",0)->src;
	$u3 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($intro3);
	file_put_contents($u3, file_get_contents($intro3));
	$tenFile3 = basename($intro3);

	// $intro4 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",2)->find("a.prettyphoto img",0)->src;
	// $u4 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($intro4);
	// file_put_contents($u4, file_get_contents($intro4));
	// $tenFile4 = basename($intro4);

	// $intro5 = $get->find("div.content-introduce div.container div.row div.col-md-6 div.row div.col-md-6",3)->find("a.prettyphoto img",0)->src;
	// $u5 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($intro5);
	// file_put_contents($u5, file_get_contents($intro5));
	// $tenFile5 = basename($intro5);

	//
	$introimg = $tenFile1.$tenFile2.$tenFile3;
	

	$tienich1 = $get->find("div#utility div.col-md-6",0)->find("a.prettyphoto img",0)->src;
	$t1 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($tienich1);
	file_put_contents($t1, file_get_contents($tienich1));
	$tenFile6 = basename($tienich1);

	$tienich2 = $get->find("div#utility div.col-md-6",1)->find("a.prettyphoto img",0)->src;
	$t2 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($tienich2);
	file_put_contents($t2, file_get_contents($tienich2));
	$tenFile7 = basename($tienich2);

	$tienich3 = $get->find("div#utility div.utility-image div.col-md-12",0)->find("a.prettyphoto img",0)->src;
	$t3 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($tienich3);
	file_put_contents($t3, file_get_contents($tienich3));
	$tenFile8 = basename($tienich3);

	// $tienich4 = $get->find("div#utility div.col-md-6",2)->find("a.prettyphoto img",0)->src;
	// $t4 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($tienich4);
	// file_put_contents($t4, file_get_contents($tienich4));
	// $tenFile9 = basename($tienich4);

	// $tienich5 = $get->find("div#utility div.col-md-6",3)->find("a.prettyphoto img",0)->src;
	// $t5 = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($tienich5);
	// file_put_contents($t5, file_get_contents($tienich5));
	// $tenFile10 = basename($tienich5);
	//
	$tienichimg = $tenFile6.$tenFile7.$tenFile8;
	

	$vitri = $get->find("div.content-location div.image-map img",0)->src;
	$v = 'D:\workspace\.metadata\.plugins\org.eclipse.wst.server.core\tmp0\wtpwebapps\project_cland\files/'.basename($vitri);
	file_put_contents($v, file_get_contents($vitri));
	$tenFile11 = basename($vitri);

	// $u1 = 'duan/'.basename($img1);
	// file_put_contents($u1, file_get_contents($img1));
	// $tenFile1 = basename($img1);

	// $u2 = 'duan/'.basename($img2);
	// file_put_contents($u2, file_get_contents($img2));
	// $tenFile2 = basename($img2);

	$qr1 ="INSERT INTO image(trangchu, gioithieu, gioithieu1, gioithieu2, tienich, tienich2, tienich3, vitri) VALUES ('$tenFile1','$tenFile1','$tenFile2','$tenFile3','$tenFile6','$tenFile7','$tenFile8','$tenFile11')";
	$result1 = mysqli_query($mysqli, $qr1);

	//lay duoc id roi

	$id = mysqli_insert_id($mysqli); //lay id cua thang image
 	// if($result1){
		// $qr ="UPDATE projects set title='$title', description='$desc', sellers='$seller',id_image='$id', overview='$detail1', utility='$detail2', location='$detail3',trangchu='$tenFile' where trangchu='$tenFile'";

		$qr = "INSERT INTO projects(title, description, sellers, id_image, address, overview, utility, location) VALUES('$title','$desc','$seller','$id','$address','$detail1','$detail2','$detail3')";
 		$result2 = mysqli_query($mysqli, $qr);
	// }
}
?>