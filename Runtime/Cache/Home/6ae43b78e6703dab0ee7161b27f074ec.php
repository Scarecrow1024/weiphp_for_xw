<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>HPU小微绩点查询</title>

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
    <style type="text/css">
    footer{background-color:#F5DEB3;color:#666;position: fixed;bottom: 0px;width: 100%;padding: 10px;text-align: center;}
    </style>
    <body>
        <div class="panel panel-default">
            <!-- Default panel contents -->
            <div class="panel-heading" style="text-align: center;background-color:#5CACEE;height:50px"><h4><strong>河南理工大学绩点计算平台</strong></h4>
            <p style="color:#8968CD">关注HPU小微体验更多功能</p>
            </div>
            <div class="panel-body">
            这里提供三种计算绩点的方法标准4.0是最常用的计算绩点的方法(与学校官方的计算标准可能不同所以计算结果可能会有误差)<br>
            平均绩点:(课程学分1*绩点+课程学分2*绩点+课程学分n*绩点)/(课程学分1+课程学分2+课程学分n)<br>
            <strong style="color:#8968CD"><?php echo $name?></strong>同学截止到本学期<?php echo "你已修读".$fen."学分,已完成".$con."门课程"?><br>你的平均绩点计算结果如下：
            
            <table class="table table-striped table-bordered table-hover">
                <tr>
                    <th>标准</th>
                    <th>总绩点</th>
                    <th>平均绩点</th>
                </tr>
                <tr>
                    <th>标准4.0(常用)</th>
                    <th><?php echo array_sum($h2)?></th>
                    <th><?php echo number_format(array_sum($h2)/$fen, 2, '.', '');?></th>
                </tr>    
                <tr>
                    <th>中科大4.3标准</th>
                    <th><?php echo array_sum($h3)?></th>
                    <th><?php echo number_format(array_sum($h3)/$fen, 2, '.', '');?></th>
                </tr> 
                <tr>
                    <th>交大4.3标准</th>
                    <th><?php echo array_sum($h1)?></th>
                    <th><?php echo number_format(array_sum($h1)/$fen, 2, '.', '');?></th>
                </tr>  
                <tr>
                    <th>平均(取以上平均值)</th>
                    <th><?php echo number_format((array_sum($h1)+array_sum($h2)+array_sum($h3))/3, 2, '.', '');?></th>
                    <th><?php echo number_format((array_sum($h1)/$fen+array_sum($h2)/$fen+array_sum($h3)/$fen)/3, 2, '.', '');?></th>
                </tr>    
            </table>
            
            </div>
            
        <!-- Table -->
            <div>
                <div class="panel-body col-md-3"><p>通用标准算法说明</p>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>成绩</th>
                            <th>绩点</th>
                        </tr>
                        <tr>
                            <td>90-100</td>
                            <td>4.0</td>
                        </tr>    
                        <tr>
                            <td>85-89</td>
                            <td>3.7</td>
                        </tr>   
                        <tr>
                            <td>84-82</td>
                            <td>3.3</td>
                        </tr>    
                        <tr>
                            <td>78-81</td>
                            <td>3.0</td>
                        </tr>   
                        <tr>
                            <td>75-77</td>
                            <td>2.7</td>
                        </tr>    
                        <tr>
                            <td>74-72</td>
                            <td>2.3</td>
                        </tr> 
                        <tr>
                            <td>68-71</td>
                            <td>2.0</td>
                        </tr>    
                        <tr>
                            <td>64-67</td>
                            <td>1.7</td>
                        </tr> 
                        <tr>
                            <td>60-63</td>
                            <td>1.0</td>
                        </tr>    
                        <tr>
                            <td>补考60</td>
                            <td>1.0</td>
                        </tr>   
                        <tr>
                            <td>不及格</td>
                            <td>0</td>
                        </tr>   
                    </table>
                </div>
                <div class="panel-body col-md-3"><p>中科大4.3算法说明</p>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>成绩</th>
                            <th>绩点</th>
                        </tr>
                        <tr>
                            <td>95-100</td>
                            <td>4.3</td>
                        </tr>  
                        <tr>
                            <td>90-94</td>
                            <td>4.0</td>
                        </tr>    
                        <tr>
                            <td>85-89</td>
                            <td>3.7</td>
                        </tr>   
                        <tr>
                            <td>84-82</td>
                            <td>3.3</td>
                        </tr>    
                        <tr>
                            <td>78-81</td>
                            <td>3.0</td>
                        </tr>   
                        <tr>
                            <td>75-77</td>
                            <td>2.7</td>
                        </tr>    
                        <tr>
                            <td>74-72</td>
                            <td>2.3</td>
                        </tr> 
                        <tr>
                            <td>68-71</td>
                            <td>2.0</td>
                        </tr>    
                        <tr>
                            <td>65-67</td>
                            <td>1.7</td>
                        </tr> 
                        <tr>
                            <td>62-64</td>
                            <td>1.5</td>
                        </tr>
                        <tr>
                            <td>61-63</td>
                            <td>1.3</td>
                        </tr>    
                        <tr>
                            <td>60</td>
                            <td>1.0</td>
                        </tr>   
                        <tr>
                            <td>不及格</td>
                            <td>0</td>
                        </tr>    
                    </table>
                </div>
                <div class="panel-body col-md-3"><p>交大4.3算法说明</p>
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>成绩</th>
                            <th>绩点</th>
                        </tr>
                        <tr>
                            <td>95-100</td>
                            <td>4.3</td>
                        </tr>  
                        <tr>
                            <td>90-94</td>
                            <td>4.0</td>
                        </tr>    
                        <tr>
                            <td>85-89</td>
                            <td>3.7</td>
                        </tr>       
                        <tr>
                            <td>80-84</td>
                            <td>3.3</td>
                        </tr>   
                        <tr>
                            <td>75-79</td>
                            <td>3.0</td>
                        </tr>    
                        <tr>
                            <td>70-74</td>
                            <td>2.7</td>
                        </tr> 
                        <tr>
                            <td>67-69</td>
                            <td>2.3</td>
                        </tr>    
                        <tr>
                            <td>65-66</td>
                            <td>2.0</td>
                        </tr> 
                        <tr>
                            <td>62-64</td>
                            <td>1.7</td>
                        </tr>
                        <tr>
                            <td>60-61</td>
                            <td>1.0</td>
                        </tr>       
                        <tr>
                            <td>不及格</td>
                            <td>0</td>
                        </tr>     
                    </table>
                </div>
                
            </div>
        </div>

        <footer>
        &copy;HPU小微提供
    </footer>
    </body>

</html>