<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<!-- saved from url=(0081)http://115.28.205.182/ifreehand/index.php -->
<!DOCTYPE html PUBLIC "" ""><HTML><HEAD><META content="IE=11.0000" 
http-equiv="X-UA-Compatible">
     
<META charset="utf-8">   <TITLE>理工掌上图书馆</TITLE>  
<META http-equiv="X-UA-Compatible" content="IE=edge">    
<META name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     
<META name="apple-mobile-web-app-capable" content="yes">     
<META name="apple-mobile-web-app-status-bar-style" content="black">  
<link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
<style>
        body{padding-top: 40px;padding-bottom: 35px;}
        .row{margin: 0px;}
        #navid{background-color: #333;height: 40px;position: fixed;top: 0px;left: 0px;right: 0px;}   
        #navid span{color: #ffffff;font-size: 18px; line-height: 40px;}
        table, td, th, tr{text-align: center;}
        #badge1{background-color: #FF0033;height: 27px;line-height: 22px;}
        #badge2{background-color: #9A9494;height: 27px;line-height: 22px;}
        #badge3{background-color: #6868F3;height: 27px;line-height: 22px;}
        footer{background-color:#F5DEB3;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
    </style>
     
<script>
        $(document).ready(function() {
            /*回到图书检索界面*/
            $('.glyphicon-search').click(function() {
                window.location.href="<?php echo U('ser');?>";
            });
            
            /* 回到登录页面 */
            $('.glyphicon-user').click(function() {
                window.location.href="<?php echo U('grzx');?>";
            });

        });
    </script>

<meta name="GENERATOR" content="MShtml 11.00.9600.18098"></HEAD> 
<body><!-- 头部 -->    
<div class="row" id="navid">
<div class="col-xs-2"><span class="glyphicon glyphicon-user"></span>         
</div>
<div class="col-xs-8" style="text-align: center;"><span>查询结果</span>       </div>
<div class="col-xs-2"><span class="glyphicon glyphicon-search"></span>
</div>
</div><!-- 表单 -->  

<table class="table table-striped table-bordered table-hover">
    <?php for($i=0;$i<$con;$i++){?>
    <tr>
      <td class="text-left"><?php echo $arr[$i]?></td>
    </tr>
    <?php }?>
</table>

</div>
<footer>©HPU小微提供 </footer></body></html>