<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
         <title>设计通用的响应式企业模板</title>
        <meta name="viewport" content="user-scalable=no,width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl ?>/assets/index/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl ?>/assets/index/css/global.css" />
        <link rel="stylesheet" href="<?php echo yii::app()->request->baseUrl ?>/assets/index/css/style.css" />
    </head>
    <body class="bg01">
        <div class="mobile_header hidden-md hidden-lg">
            <a href="index.html" class="logo">
                <img src="<?php echo yii::app()->request->baseUrl ?>/assets/index/upload/logo.png"/>
            </a>
            <span class="menu_icon"></span>
            <ul class="menu">
                <li class="on"><a href="index.html">首页</a></li>
                <li><a href="about.html">关于我们</a></li>
                <li><a href="cplist.html">产品中心</a></li>
                <li><a href="newslist.html">新闻中心</a></li>
                <li><a href="contact.html">联系我们</a></li>
                <li><a href="message.html">在线留言</a></li>
            </ul>
        </div>
        <div class="header hidden-xs hidden-sm clearfix">
            <div class="container">				
                <a href="index.html" class="logo">
                    <img src="<?php echo yii::app()->request->baseUrl ?>/assets/index/upload/logo.png"/>
                </a>
                <div class="nav">
                    <ul>
                        <li class="on"><a href="index.html">首页</a></li>
                        <li><a href="about.html">关于我们</a></li>
                        <li><a href="cplist.html">产品中心</a></li>
                        <li><a href="newslist.html">新闻中心</a></li>
                        <li><a href="contact.html">联系我们</a></li>
                        <li><a href="message.html">在线留言</a></li>
                    </ul>
                </div>
            </div>
        </div>





        
       <?php echo $content; ?>






        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="footer_ewm col-lg-3 col-md-3 col-sm-3 hidden-xs">
                            <img src="<?php echo yii::app()->request->baseUrl ?>/assets/index/upload/code.png"/>
                        </div>
                        <ul class="footer_contact col-lg-9 col-md-9 col-sm-9 hidden-xs">
                            <li>电话：<i>400-000-0000</i></li>
                            <li>服务时间：周一到周五早8:00到晚5:00</li>
                            <li>邮箱：xxx@163.com</li>
                            <li>地址：公司地址</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <ul class="footer_nav hidden-xs">
                            <li><a href="#">新闻中心</a></li>
                            <li><a href="#">产品中心</a></li>
                            <li><a href="#">招聘中心</a></li>
                            <li><a href="#">关于我们</a></li>
                        </ul>
                        <p class="copyr">
                            <a href="http://www.miitbeian.gov.cn">
                                Copyright © 公司版权所有鲁ICP备13009425号 
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>