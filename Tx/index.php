<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>头像阁</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/bootstrap-3.3.4.css">
	<link rel="stylesheet" href="css/style.css">
	<meta name="Keywords" Content="网页关键字" >
    <meta name="description" Content="网页描述文字" >
</head>
<body>
	
	<div id="wrapper">
        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                      分类
                    </a>
                </li>
                <li>
                    <a href="?s=nanshengtx"> 男生</a>
                </li>
                <li>
                    <a href="?s=nvshengtx"> 女生</a>
                </li>
                <li>
                    <a href="?s=qinglvtx"> 情侣</a>
                </li>
                <li>
                    <a href="?s=katongtx"> 卡通</a>
                </li>
                <li>
                    <a href="?s=heibaitx"> 黑白</a>
                </li>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <button type="button" class="hamburger is-closed animated fadeInLeft" data-toggle="offcanvas">
            <span class="hamb-top"></span>
            <span class="hamb-middle"></span>
            <span class="hamb-bottom"></span>
          </button>
            <div class="container">
                <div class="row">
<?php
$s = isset($_GET["s"]) ? $_GET["s"] : "gexingtx";
$ch = curl_init("https://m.qqtn.com/tx/".$s);           
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);             
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch,CURLOPT_TIMEOUT,1000);        
    $result = curl_exec($ch);                                    
    curl_close($ch);
$preg = '/<img.*?src=[\"|\']?(.*?)[\"|\']?\s.*?>/i';
$a ="/href=\"([^\"]+)/i";
preg_match_all($a,$result,$ar);//链接
preg_match_all($preg,$result,$arr);//匹配图片
$num = count($arr[1]);
for($i=0;$i<$num;$i++){
  $l = 28+$i;
  echo '<a href="api.php?s='.$ar[1][$l].'"><div class="col-xs-6"><img src="'.$arr[1][$i].'" width="180px"></div></a>';
 }

?>
    
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
	
	<script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
	<script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
		  var trigger = $('.hamburger'),
		      overlay = $('.overlay'),
		     isClosed = false;

		    trigger.click(function () {
		      hamburger_cross();      
		    });

		    function hamburger_cross() {

		      if (isClosed == true) {          
		        overlay.hide();
		        trigger.removeClass('is-open');
		        trigger.addClass('is-closed');
		        isClosed = false;
		      } else {   
		        overlay.show();
		        trigger.removeClass('is-closed');
		        trigger.addClass('is-open');
		        isClosed = true;
		      }
		  }
		  
		  $('[data-toggle="offcanvas"]').click(function () {
		        $('#wrapper').toggleClass('toggled');
		  });  
		});
	</script>
</body>
</html>
