<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>头像阁</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.staticfile.org/angular.js/1.6.3/angular.min.js"></script>
</head>
<style>img {width:180px;}</style>
<body>
<div class="row">
<?php
if(isset($_GET["s"])){
$ch = curl_init("https://m.qqtn.com".$_GET["s"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);                 
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);             
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);             
    $result = curl_exec($ch);                                    
    curl_close($ch);

$preg = '/<img.*?src=[\"|\']?(.*?)[\"|\']?\s.*?>/i';
preg_match_all($preg,$result,$arr);//匹配图片
$num = count($arr[0]);
for($i=0;$i<$num;$i++){
   echo '<div class="col-xs-6">'.$arr[0][$i].'</div>';  
}
}else{
echo "<h3>无参数</h3>";
}
?>
</div>
<script>
$("p").remove();
</script>
</body>
</html>