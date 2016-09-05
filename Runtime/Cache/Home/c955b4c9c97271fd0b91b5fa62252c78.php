<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>绩点查询</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
    content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="telephone=no,email=no" name="format-detection">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <style>
        .row{margin: 0px;}
        #navid{background-color: #B9D3EE;height: 50px;} 
        #navid span{color: #ffffff;font-size: 18px; line-height: 35px;}
        #content{margin: 15px 10px 0px 10px;border-top: 1px solid #B9D3EE;}
        .glyphicon-user, .glyphicon-education, .glyphicon-eye-open{line-height: 32px;font-size: 27px;color: #B9D3EE;}
        .btn-success{width: 100%;background-color: #B9D3EE;border-color:#B9D3EE; }
        footer{background-color:#BCD2EE;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
    </style>
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
    <script>

        $(document).ready(function() {
            /* 验证码刷新 */
            $('#imgId').click(function() {
                $("#imgId").attr('src',"<?php echo U('verify');?>");
            });
            $('#verify').click(function() {
                $("#imgId").attr('src','<?php echo U("verify");?>');
            });

            /* 数据校验 */
            $('#buttonId').click(function() {
                var zjh= $("#input1").val();
                var mm = $("#input2").val();
                //var v_yzm = $("#input3").val();

                if (zjh == '') {alert('请输入学号'); return false;}
                if (mm == '') {alert('请输入密码'); return false;}
                //if (v_yzm == '') {alert('请输入验证码'); return false;}
            });
        });
    </script>

</head>

<body>
    <!-- 头部 -->
    <div class="row" id="navid">
        <div class="col-xs-12" style="text-align: center;">
            <span>河南理工大学</span>
        </div>
    </div>
    <!-- 表单 -->
    <div class="row">
        <div class="panel panel-default" id="content">
            <div class="panel-body">
                <form class="form-horizontal" action="<?php echo U('jidian');?>" method="post">
                
                    <div class="form-group">
                        <label for="input1" class="col-xs-2 control-label">
                            <span class="glyphicon glyphicon-user"></span>
                        </label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="zjh" value="<?php echo $studentid?>" id="input1" placeholder="学号">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input2" class="col-xs-2 control-label">
                            <span class="glyphicon glyphicon-education"></span>
                        </label>
                        <div class="col-xs-10">
                            <input type="password" class="form-control" value="<?php echo $mm?>" name="mm" id="input2" placeholder="教务处密码">
                            <input type="hidden" name="openid" value=""> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input3" class="col-xs-2 control-label">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </label>
                        <div class="col-xs-6">
                            <input type="text" class="form-control" value="∑(っ °Д °;)っ" name="v_yzm" id="input3" disabled="disabled" placeholder="验证码">
                        </div>
                        
                        <div class="col-xs-4" style="line-height: 30px;padding: 0px;">
                            <img src="<?php echo U('verify');?>" alt="点击获取" id="imgId" style="height: 27px;" onclick="this.src='verify.php?'+Math.random()">
                        </div>
                        <div class="col-xs-4" style="line-height: 30px;padding: 0px;">
                            <input type="button" id="verify" class="btn btn-info btn-sm " onclick="this.src='<?php echo U('verify');?>?'+Math.random()" value="看不清换张">                      
                        </div>
                    </div>

                    <input type="submit" class="btn btn-success" id="buttonId" name="submit" value="查询">
                </form>
            </div>
            
            <!-- 脚注 -->
                    
        </div>
    </div>
    <br>
    <div class="col-xs-12 " style="text-align: left;">            
        <strong style="color: red">1.注意！注意！！新功能使用说明！！！</strong><br>
        <strong style="color: #CD69C9">2.点击查询一键获取查询结果,向懒人又迈进了一步</strong><br>
        <strong style="color: #CD69C9">3.验证码为后台自动识别，请先确保验证码是肉眼易分辨的，如果验证码是空白的或者有字母是连在一起的请点击看不清换一张以保证识别的准确度</strong>
    </div>
    <footer>
        &copy;HPU小微提供<br>
    </footer>
</body>
</html>