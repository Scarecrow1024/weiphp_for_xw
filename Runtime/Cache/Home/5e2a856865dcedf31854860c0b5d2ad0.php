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
<STYLE>
        body{padding-top: 40px;}
        .row{margin: 0px;}
        #navid{background-color: #333;height: 40px;position: fixed;top: 0px;left: 0px;right: 0px;}   
        #navid span{color: #ffffff;font-size: 18px; line-height: 40px;}
        #content{margin: 15px 10px 0px 10px;border-top: 3px solid #999933;}
        .glyphicon-book, .glyphicon-hand-right, .glyphicon-exclamation-sign{line-height: 32px;font-size: 27px;}
        .btn-primary{width: 49%;}
        footer{background-color:#F5DEB3;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
    </STYLE>
     
<SCRIPT>
        $(document).ready(function() {

            //回到个人信息界面
            $('.glyphicon-user').click(function() {
                window.location.href="<?php echo U('grzx');?>";
            });

            

            //用户登录处理
            $('.btn-success').click(function() {
                var input1 = $('#input1').val();
                var input2 = $('#input2').val();
                var input3 = $('#input3').val();
                if (input1=='' && input2=='' && input3=='') {alert('请输入要查询的图书');return false;}
            });
        });

    </SCRIPT>
 
<META name="GENERATOR" content="MSHTML 11.00.9600.18098"></HEAD> 
<BODY><!-- 头部 -->    
<DIV class="row" id="navid">
<DIV class="col-xs-2"><SPAN class="glyphicon glyphicon-user"></SPAN>         </DIV>
<DIV class="col-xs-8" style="text-align: center;"><SPAN>图书查询</SPAN>      </DIV>

         </DIV></DIV><!-- 表单 -->     
<DIV class="row">
<DIV class="panel panel-default" id="content">
<DIV class="panel-body">
<FORM class="form-horizontal" name="formData" action="<?php echo U('gccx');?>" method="post">
<DIV class="form-group"><LABEL class="col-xs-2 control-label" for="input1"><SPAN 
class="glyphicon glyphicon-book"></SPAN>                       </LABEL>                        
<DIV 
class="col-xs-10"><INPUT name="bookname" class="form-control" id="input1" type="text" placeholder="输入书名" value=""></DIV></DIV>
</DIV></DIV><br>                  <div class="col-xs-12"><BUTTON class="btn btn-primary" 
type="submit" style="width:100%" name="submit">查询</BUTTON>   </div>            </FORM></DIV><!-- 脚注 --> 
<br><div class="alert alert-warning" role="alert">
					过放荡不羁的生活，容易得像顺水推舟<br>但是要结识良朋益友，却难如登天。<br>
                    更新提示：借出的图书老校区的也进行了统计所以有些热门图书可能会出现可借为负的情况,这种情况十有八九是借完了,有些图书未显示地点说明南校区不存在这本书
				</div>           
<DIV class="panel-footer">说明：<BR>因使用抓取网页的方式进行图书搜索，因此查询的速度与网速有很大的关系，稍等几秒钟将会返回查询结果<BR></DIV></DIV></DIV><footer style="text-align: center;">
    &copy;HPU小微提供<br>
</footer></BODY></HTML>