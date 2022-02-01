<?php include ('./data/beipy.inc.php');
define('REFERER_URL', '|');
	$uriarr = parse_url($_SERVER['HTTP_REFERER']);
	$host = $uriarr['host'];
	$ymarr = explode("|",REFERER_URL);
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $aik['keywords'];?>" />
<meta name="description" content="<?php echo $aik['description'];?>" />
<title><?php echo $aik['sitename'];?></title>
<link href="js/pucms.css" rel="stylesheet">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/pucms.js" type="text/javascript"></script>
</head>
<body style="overflow-y:hidden;">
<div class="panel">
    <a href="javascript:QQ('<?php echo $aik['jiexi1'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi1name'];?></a>
    <a href="javascript:QQ('<?php echo $aik['jiexi2'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi2name'];?></a>
    <a href="javascript:QQ('<?php echo $aik['jiexi3'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi3name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi4'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi4name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi5'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi5name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi6'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi6name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi7'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi7name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi8'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi8name'];?></a> 
    <a href="javascript:QQ('<?php echo $aik['jiexi9'];?><?php echo $_GET["url"]; ?>')"><?php echo $aik['jiexi9name'];?></a>
    </div>
<p class="slide">
    <a class="WANG-WANG"><?php echo $aik['jiekou'];?></a></p>
<div style="margin:-36px auto;width:100%;height:100%;">
    <iframe id="WANG" scrolling="no" allowtransparency="true" frameborder="0"
            src="<?php echo $aik['maurl']?><?php echo $_GET["url"]; ?>"width="100%" scrolling="no" height="100%" align="middle" frameborder="no" hspace="0" vspace="0" allowFullscreen="true" marginheight="0" marginwidth="0" name="tv"></iframe>
    <script type="text/javascript"> function QQ(url) {
            $('#WANG').attr('src', decodeURIComponent(decodeURIComponent(url))).show();
        } </script>
</div>
<?php echo $aik['guanggao'];?>
<?php echo $aik['tongji'];?>

<!--百度收录自动推送-->
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>
<style>
