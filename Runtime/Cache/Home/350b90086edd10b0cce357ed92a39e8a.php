<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta content="telephone=no,email=no" name="format-detection">

<title>体育达标测试成绩</title>
</head>
<style>
*{margin:0;padding:0;font: 1em/120% Tahoma,"Hiragino sans gb","Microsoft YaHei",Arial, Helvetica, sans-serif;}
html{width:100%;}
body{width:100%;margin:0px auto;text-align: center;font-size: 16px;}
#sumScore{padding:8px 14px;text-align: left;}
table{background-color: #00EEEE;text-align: left;border-collapse: collapse;color:#B03060;width: 100%;margin: 8px auto 0px auto;}
th,td{border-left:5px solid #B03060;padding: 5px 14px;}
#header{background:#00EEEE;width: auto;padding: 25px 0;}
#title{font-size: 30px;color: #FFFFFF;}
#bottom{color:#00EEEE;width: auto;padding:5px 14px;text-align: left;border: 1px solid #6CA6CD;}
#info{text-align: left;background-color:#FF9966;padding: 5px 14px;color: white }
footer{background-color:#00EEEE;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
</style>
<script type="text/javascript">
    function onBridgeReady(){
 WeixinJSBridge.call('hideOptionMenu');
}

if (typeof WeixinJSBridge == "undefined"){
    if( document.addEventListener ){
        document.addEventListener('WeixinJSBridgeReady', onBridgeReady, false);
    }else if (document.attachEvent){
        document.attachEvent('WeixinJSBridgeReady', onBridgeReady); 
        document.attachEvent('onWeixinJSBridgeReady', onBridgeReady);
    }
}else{
    onBridgeReady();
}
</script>
<body>
    <div id="header">
        <span id="title">体育达标测试成绩</span>
    </div>
    
    
        <div id="content">
        <div style="font-size: 18px" id="sumScore">
            <font color="#6CA6CD">姓名：<?php echo $out1[1][1];?><br>你的体育达标</font><font color="#gray"><?php echo $out3[0][0];?></font>
        </div>
        <table>
                        <tr>
                <td><?php echo $out2[0][1];?></td>
            </tr>
                        <tr>
                <td><?php echo $out2[1][1];?></td>
            </tr>
                        <tr>
                <td><?php echo $out2[2][1];?></td>
            </tr>
                        <tr>
                <td><?php echo $out2[3][1];?></td>
            </tr>
                        <tr>
                <td><?php echo $out2[4][1];?></td>
            </tr>
                        <tr>
                <td><?php echo $out2[5][1];?></td>
            </tr>
                        <tr>
                <td><?php echo $out2[6][1];?></td>
            </tr>
                        <tr>
                <td><?php echo $out2[7][1];?></td>
            </tr>
          </table>
    </div>
    
    </body>
    <footer>&copy;HPU小微提供</footer>
</html>