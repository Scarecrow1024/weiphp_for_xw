<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>空闲教室结果</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
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
    .col-md-12{
        margin-top: 15px;
        margin-bottom: 10px;
    }
    footer{background-color:#B9D3EE;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
  </style>
  <body>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th class="text-center">教学楼</th>
                <th class="text-center">空教室</th>
            </tr>
            
            <?php for($i=1;$i<$con;$i++){?>
            <tr>
              <td class="text-center"><?php echo $arr[$i][2]?></td>
              <td class="text-center"><?php echo $arr[$i][3]?></td>
            </tr>
            <?php }?>
            
        </table>
    </div>
  </body>
  <br><br>
<footer style="text-align: center;">
    &copy;HPU小微提供<br>
</footer>
</html>