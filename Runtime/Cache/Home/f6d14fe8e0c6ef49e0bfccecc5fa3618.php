<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>成绩查询</title>

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
    footer{background-color:#B9D3EE;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
  </style>
  <body>
            
        <table style="width: 100%;" class="table table-striped table-bordered table-hover" >
              <tr>
                <th style="text-align: center;width: 40%">课程名</th>
                <th style="text-align: center;width: 20%">学分</th>
                <th style="text-align: center;width: 20%">属性</th>
                <th style="text-align: center;width: 20%">成绩</th>
              </tr>
                
                <?php $con=count($arr);?>
                <?php for($i=0;$i<$con;$i++){?>
              <tr>
                <td style="text-align: center;width: 40%"><?php echo $arr[$i][2]?></td>
                <td style="text-align: center;width: 20%"><?php echo $arr[$i][4]?></td>
                <td style="text-align: center;width: 20%"><?php echo $arr[$i][5]?></td>
                <td style="text-align: center;width: 20%"><?php echo $arr[$i][6]?></td>
              </tr>
              <?php }?>
            
        </table>
    
  </body>
  <br><br><br>
  <footer>
    <strong>&copy;HPU小微</strong><br>
</footer>
</html>