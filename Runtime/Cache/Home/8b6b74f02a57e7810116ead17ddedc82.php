<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>空教室查询</title>
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
                var zhou= $("#zhou").val();
                var jie = $("#jie").val();
                var jxl = $("#jxl").val();
                var xingqi = $("#xingqi").val();
                var v_yzm = $("#input3").val();

                if (zhou == '0') {alert('请选择周次'); return false;}
                if (jie == '0') {alert('请选择节次'); return false;}
                if (xingqi == '0') {alert('请选择星期'); return false;}
                if (jxl == '0') {alert('请选择教学楼'); return false;}
                if (v_yzm == '') {alert('请输入验证码'); return false;}
            });
        });
    </script>

</head>

<body>
<body>
    <div class="container">
    <div class="col-md-12">
      <p class=""><h3 style="color: #AB82FF;text-align:center">空教室查询<h3></p>
    </div>
    <hr>
        <form method="post" action="<?php echo U('get');?>">
            
            <div class="form-group">
            <select name="zhou" id="zhou" class="form-control">
                <option value="0"  selected>请选择周次</option>
                <option value="1" <?php if($zhou==1){echo "selected='selected'";}?>>第一周</option>
                <option value="2" <?php if($zhou==2){echo "selected='selected'";}?>>第二周</option>
                <option value="3" <?php if($zhou==3){echo "selected='selected'";}?>>第三周</option>
                <option value="4" <?php if($zhou==4){echo "selected='selected'";}?>>第四周</option>
                <option value="5" <?php if($zhou==5){echo "selected='selected'";}?>>第五周</option>
                <option value="6" <?php if($zhou==6){echo "selected='selected'";}?>>第六周</option>
                <option value="7" <?php if($zhou==7){echo "selected='selected'";}?>>第七周</option> 
                <option value="8" <?php if($zhou==8){echo "selected='selected'";}?>>第八周</option>
                <option value="9" <?php if($zhou==9){echo "selected='selected'";}?>>第九周</option>
                <option value="10" <?php if($zhou==10){echo "selected='selected'";}?>>第十周</option>
                <option value="11" <?php if($zhou==11){echo "selected='selected'";}?>>第十一周</option>
                <option value="12" <?php if($zhou==12){echo "selected='selected'";}?>>第十二周</option>
                <option value="13" <?php if($zhou==13){echo "selected='selected'";}?>>第十三周</option>
                <option value="14" <?php if($zhou==14){echo "selected='selected'";}?>>第十四周</option>
                <option value="15" <?php if($zhou==15){echo "selected='selected'";}?>>第十五周</option>
                <option value="16" <?php if($zhou==16){echo "selected='selected'";}?>>第十六周</option>
                <option value="17" <?php if($zhou==17){echo "selected='selected'";}?>>第十七周</option>
                <option value="18" <?php if($zhou==18){echo "selected='selected'";}?>>第十八周</option>
                <option value="19" <?php if($zhou==19){echo "selected='selected'";}?>>第十九周</option>
                <option value="20" <?php if($zhou==20){echo "selected='selected'";}?>>第二十周</option>
                <option value="21" <?php if($zhou==21){echo "selected='selected'";}?>>第二十一周</option>
                <option value="22" <?php if($zhou==22){echo "selected='selected'";}?>>第二十二周</option>
            </select>
            </div>
            <div class="form-group">
            <select name="xingqi" class="form-control">
                <option value="0" selected="selected">请选择星期</option>
                <option value="1" <?php if($day==1){echo "selected='selected'";}?>>星期一</option>
                <option value="2" <?php if($day==2){echo "selected='selected'";}?>>星期二</option>
                <option value="3" <?php if($day==3){echo "selected='selected'";}?>>星期三</option>
                <option value="4" <?php if($day==4){echo "selected='selected'";}?>>星期四</option>
                <option value="5" <?php if($day==5){echo "selected='selected'";}?>>星期五</option>
                <option value="6" <?php if($day==6){echo "selected='selected'";}?>>星期六</option>
                <option value="7" <?php if($day==7){echo "selected='selected'";}?>>星期日</option>
            </select>
            </div>
            
            <div class="form-group">
            <select name="jie" class="form-control">
                <option value="0" selected="selected">请选择节次</option>
                <option value="1" selected="selected">第一节</option>
                <option value="2">第二节</option>
                <option value="3">第三节</option>
                <option value="4">第四节</option>
                <option value="5">第五节</option>
                <option value="6">第六节</option>
                <option value="7">第七节</option>
                <option value="8">第八节</option>
                <option value="9">第九节</option>
                <option value="10">第十节</option>
            </select>
            </div>
            <div class="form-group">
            <select name="jxl" class="form-control">
                <option value="0" selected="selected">请选择教学楼</option>
                <option value="1">1号教学楼</option>
                <option value="2">2号教学楼</option>
                <option value="3" selected="selected">3号教学楼</option>
                <option value="4">电气综合楼</option>
                <option value="9">理化综合楼</option>
                <option value="5">机械综合楼</option>
                <option value="6">能源综合楼</option>
                <option value="7">资环综合楼</option>
                <option value="8">测绘综合楼</option>
                <option value="12">土木综合楼</option>
                <option value="18">计算机综合楼</option>
                <option value="17">文科综合楼</option>
                <option value="13">经管综合楼</option>
                <option value="15">材料综合楼</option>
            </select>
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" value="311309010130" name="zjh" id="input1" placeholder="学号">
            </div>
            <div class="form-group">
                    <input type="hidden" class="form-control" value="941126" name="mm" id="input2" placeholder="教务处密码">
            </div>
            <div class="form-group">     
                <div class="col-xs-10" style="margin-left: -15px;">
                    <input type="text" class="form-control" name="v_yzm" id="input3" placeholder="验证码">
                </div>
                <div class="col-xs-2" style="line-height: 30px;padding: 0px;">
                    <img src="<?php echo U('verify');?>" alt="点击获取" id="imgId" style="height: 27px;margin-left: -10px" onclick='this.src=<?php echo U("verify");?>?+Math.random()'>               
                </div>
            </div>
            <div class="form-group" style="margin-top: 60px;">
              <button type="submit" id="buttonId" name="submit" class="btn btn-block btn-info btn-lg"><strong>查询空教室</strong></button>
            </div>
            <div class="form-group" style="margin-top: 60px;">
              
            </div>
        </form>
    </div>
</body>
    <footer>
        &copy;HPU小微提供<br>
    </footer>
</body>
</html>