<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<script type="text/javascript">
    //禁止显示连接
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
<head>
    <title>教务处课表</title>
</head>
<body>
    <?php echo ($day); ?>
</body>
</html>