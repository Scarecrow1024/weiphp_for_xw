<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0077)http://www.hequanxi.com/ifreehand/index.php?s=/addon/Repair/Repair/index.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title>河南理工大学</title>
	<!-- 引入相关css -->
	<link href="/weixin/Addons/Repair/View/default/Public/frozen.css" rel="stylesheet">
<style type="text/css" adt="123"></style>><style type="text/css">object,embed{                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;                -o-animation-duration:.001s;-o-animation-name:playerInserted;                animation-duration:.001s;animation-name:playerInserted;}                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}</style></head>

<body>
	
	<!-- 头部开始 -->
	<header class="ui-header ui-header-positive ui-border-b" style="background-color: #2D383E;">
		<h1>个人中心</h1>
	</header><!-- 头部结束 -->

	<!-- 说明可以直接进行报修操作 -->
		<section class="ui-container ui-center">
		
			<h4>当前用户 |  <?php echo $studentid?></h4>
			
			<div class="ui-flex  ui-flex-align-center" style="height: 100%;background-color: white;width: 100%;margin-top: 18px;">
			<form action="<?php echo U('update');?>" method="post">
				<div class="ui-form-item ui-border-b">
					<label>
						昵称
					</label>
					<input type="text" name="nickname" value="" id="nickname">
				</div>
				<div class="ui-form-item ui-border-b">
					<label>
						手机号
					</label>
					<input type="text" name="phone" value="" id="tel">
				</div>
				<div class="ui-form-item ui-border-b">
					<label>
						现住址
					</label>
					<input type="text" value="" name="address" id="address">
					
					<input type="hiddent" value="<?php echo $studentid?>" name="MID" id="studentid">
				</div>
				
				    <input type="hidden" name="openid" value="<?php echo $openid;?>">
				
				<div class="ui-btn-wrap">
					<input class="ui-btn-lg ui-btn-primary" type="submit" name="submit" value="提 交">
				</div>
			</form>	
			</div>
		</section>


</body></html>