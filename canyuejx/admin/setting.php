<!--全局设置-->
<?php 
include('config.php'); 
$tips = '';
include('admincore.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<?php include('inc.php'); ?>
		<script type="text/javascript" src="./js/jquery.js"></script>
		<script type="text/javascript" src="./js/jquery.dragsort-0.4.min.js"></script>
	</head>
<body>
	<?php $nav = 'setting';include('head.php'); ?>
	
	<div id="hd_main">
		<div class="hd_bj">
			<div class="hd_bt">
			</div> 
			<div align="center"><?php echo $tips?></div>
			 
			<form name="configform" id="configform" action="./setting.php?act=setting&t=<?php echo time()?>" method="post" onsubmit="return subck()">
				<table width="90%"  align="center" cellpadding="5" cellspacing="1" class="tablecss" >
					<tr class="thead">
						<td colspan="10" align="left" style="color: #0093FF;font-weight: bold;font-size: 16px;">基本设置</td>
					</tr>
					<tr>
					  <td width="125" align="right" valign="middle" class="s_title">网站名称：</td>
					  <td width="690" valign="middle">
					  	<input name="edit" id="edit" type="hidden" value="1" />
					  	<input type="text" name="aik[sitename]" class="shuru" value="<?php echo $aik['sitename']?>" size="50" >
					  	<span class="gray tips">如：残月解析系统</span>
					  </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">网站域名：</td>
					    <td width="690" valign="middle">
					    	<input type="text" name="aik[pcdomain]" class="shuru" id="aik_pcdomain" value="<?php echo $aik['pcdomain']?>" size="50">
					      <span class="gray tips">网站域名，如 canyuejx/ </span>
					    </td>
					</tr>

					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">首页关键字：</td>
					    <td valign="top"><span class="gray tips">关键字请用英文逗号分开，一般不超过100个字符</span><br>
					    	<textarea name="aik[keywords]" cols="150" rows="3"><?php echo $aik['keywords']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">首页描述：</td>
					    <td valign="top">
					    	<span class="gray tips">一般不超过200个字符</span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[description]" cols="150" rows="3"><?php echo $aik['description']?></textarea>
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">切换线路名称：</td>
					    <td width="690" valign="middle">
					    	<input type="text" name="aik[jiekou]" id="aik_path" value="<?php echo $aik['jiekou']?>" size="50">
					    </td>
					</tr>
					<tr>
						<td width="125" align="right" valign="middle" class="s_title">默认解析接口：</td>
						<td valign="top">页面打开默认解析接口<font color="red">（建议使用稳定线路_避免用户流失）</font><div class="cl5"></div>
						    <input type="text" name="aik[maurl]" class="shuru" placeholder="视频链接：" value="<?php echo $aik['maurl']?>" size=100" >
						</td>
					</tr>
					<tr>										
					<tr>						
					    <td width="125" align="right" valign="middle" class="s_title">更多解析接口：</td>
					   		
					    <td valign="top">请将解析接口分别填入下列空中<font color="red">（接口名称根据自己喜好修改）</font><div class="cl5"></div>
							<input type="text" name="aik[jiexi1name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi1name']?>" size=20" ><input type="text" name="aik[jiexi1]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi1']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi2name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi2name']?>" size=20" ><input type="text" name="aik[jiexi2]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi2']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi3name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi3name']?>" size=20" ><input type="text" name="aik[jiexi3]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi3']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi4name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi4name']?>" size=20" ><input type="text" name="aik[jiexi4]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi4']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi5name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi5name']?>" size=20" ><input type="text" name="aik[jiexi5]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi5']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi6name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi6name']?>" size=20" ><input type="text" name="aik[jiexi6]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi6']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi7name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi7name']?>" size=20" ><input type="text" name="aik[jiexi7]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi7']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi8name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi8name']?>" size=20" ><input type="text" name="aik[jiexi8]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi8']?>" size="80" ><br/>
							<input type="text" name="aik[jiexi9name]" class="shuru" placeholder="名称：" value="<?php echo $aik['jiexi9name']?>" size=20" ><input type="text" name="aik[jiexi9]" placeholder="接口url：" class="shuru" value="<?php echo $aik['jiexi9']?>" size="80" ><br/>
				    </td>
					</tr>										
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">解析广告代码：</td>
						<td valign="top">请将解析广告代码填入下列空中<font color="red">（注:解析广告只能覆盖原有广告 或一次解析无广告可添加自己的独立广告 或不填）</font><div class="cl5"></div>
					    
					    	<div class="cl5"></div>
					    	<textarea name="aik[guanggao]" cols="150" rows="5" placeholder="不开启请留空。"><?php echo $aik['guanggao']?></textarea>
					    	
					    </td>
					</tr>
					<tr>
					    <td width="125" align="right" valign="middle" class="s_title">统计信息：</td>
					    <td valign="top">
						<span class="gray tips">可自定义配置，如无需配置请留空<a href="https://web.umeng.com/main.php?c=user&a=index" target="_blank">点击获取统计代码</a></span>
					    	<div class="cl5"></div>
					    	<textarea name="aik[tongji]" cols="150" rows="5"><?php $aik['tongji'] = str_replace("\\'","'",$aik['tongji']);echo htmlspecialchars($aik['tongji'])?></textarea>
					    </td>				
					</tr>
					<td colspan="10" align="left" style="color: #0093FF;font-weight: bold;font-size: 16px;">账号设置</td>
						
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title">登录账号：</td>
						    <td valign="top"><input type="text" name="aik[admin_name]" value="<?php echo $aik['admin_name']?>" size="30">
						   	<span class="gray tips"></span></td>
						</tr>
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title">登录密码：</td>
						    <td valign="top"><input type="text" name="aik[admin_pass]" value="" size="30">
						    <span class="gray tips">不修改请留空</span></td>
						</tr>
						<tr>
						    <td width="125" align="right" valign="middle" class="s_title">管理员邮箱：</td>
						    <td valign="top"><input type="text" name="aik[admin_email]" value="<?php echo $aik['admin_email']?>" size="30"></td>
						</tr>
					
				</table>
				<!--核心提交-->
				<div align="center" style="margin: 20 auto; display: inline-block;width: 100%;">
						<input name="edit" type="hidden" value="1" />
						<input id="configSave" type="submit" class="nth" onclick="return getsort()" value="保 &nbsp;&nbsp;&nbsp;&nbsp;存">
				</div>	
			</form>
			<script type="text/javascript">
				$(".sxlist:first").dragsort();
			</script>
		</div>
	</div>
<!--<?php include('foot.php'); ?>-->
</body>
</html>