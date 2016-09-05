<?php if (!defined('THINK_PATH')) exit();?>﻿

<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>期末成绩查询</title>

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
    footer{background-color:#BCD2EE;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
  </style>
  <body>
        <table style="width: 100%;text-align: center;" class="table table-striped table-bordered table-hover" >
              <tr>
                <th style="text-align: center;width: 30%;">课程名称</th>
                <th style="text-align: center;">学分</th>
                <th style="text-align: center;">最高</th>
                <th style="text-align: center;">最低</th>
                <th style="text-align: center;">平均分</th>
                <th style="text-align: center;">成绩</th>
                <th style="text-align: center;">名次</th>
              </tr>
                
                <?php $con=count($data['kcm']);?>
                <?php for($i=0;$i<$con;$i++){?>
              <tr>
                <td><?php echo $data['kcm'][$i]?></td>
                <td><?php echo $data['xf'][$i]?></td>
                <td><?php echo $data['zgf'][$i]?></td>
                <td><?php echo $data['zdf'][$i]?></td>
                <td><?php echo $data['pjf'][$i]?></td>
                <td><?php echo $data['cj'][$i]?></td>
                <td><?php echo $data['mc'][$i]?></td>
              </tr>
              <?php }?>
            
        </table>
    
  </body>
  <br><br><br>
  <footer>
    <strong style="color:#666">&copy;HPU小微提供</strong><br>
</footer>
</html>