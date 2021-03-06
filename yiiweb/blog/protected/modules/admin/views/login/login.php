<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>某it大神博客后台界面模板</title>
<link rel="stylesheet" type="text/css" href="<?php echo yii::app()->request->baseUrl ?>/assets/admin/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo yii::app()->request->baseUrl ?>/assets/admin/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo yii::app()->request->baseUrl ?>/assets/admin/css/login.css">
<link rel="apple-touch-icon-precomposed" href="<?php echo yii::app()->request->baseUrl ?>/assets/admin/images/icon/icon.png">
<link rel="shortcut icon" href="<?php echo yii::app()->request->baseUrl ?>/assets/admin/images/icon/favicon.ico">
<script src="<?php echo yii::app()->request->baseUrl ?>/assets/admin/js/jquery-2.1.4.min.js"></script>
<!--[if gte IE 9]>
  <script src="<?php echo yii::app()->request->baseUrl ?>/assets/admin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
  <script src="<?php echo yii::app()->request->baseUrl ?>/assets/admin/js/html5shiv.min.js" type="text/javascript"></script>
  <script src="<?php echo yii::app()->request->baseUrl ?>/assets/admin/js/respond.min.js" type="text/javascript"></script>
  <script src="<?php echo yii::app()->request->baseUrl ?>/assets/admin/js/selectivizr-min.js" type="text/javascript"></script>
<![endif]-->
<!--[if lt IE 9]>
  <script>window.location.href='upgrade-browser.html';</script>
<![endif]-->
</head>

<body class="user-select">
<div class="container">
  <div class="siteIcon"><img src="<?php echo yii::app()->request->baseUrl ?>/assets/admin/images/icon/icon.png" alt="" data-toggle="tooltip" data-placement="top" title="欢迎使用异清轩博客管理系统" draggable="false" /></div>
  <?php $form = $this->beginWidget('CActiveForm',array('htmlOptions' => array("class"=>"form-signin"))) ?>
    <h2 class="form-signin-heading">管理员登录</h2>
    <label for="userName" class="sr-only">用户名</label>
   <!--  <input type="text" id="userName" name="username" class="form-control" placeholder="请输入用户名" required autofocus autocomplete="off" maxlength="10"> -->
    <?php echo $form->textField($loginForm, 'username', array('id'=>'userName', 'class'=>'form-control', 'placeholder'=>'请输入用户名')) ?>
    <label for="userPwd" class="sr-only">密码</label>
   <!--  <input type="password" id="userPwd" name="password" class="form-control" placeholder="请输入密码" required autocomplete="off" maxlength="18"> -->
     <?php echo $form->passwordField($loginForm, 'password', array('id'=>'userPwd', 'class'=>'form-control', 'placeholder'=>'请输入密码')) ?>
   
     <?php echo $form->textField($loginForm, 'captcha', array('id'=>'code', 'class'=>'form-control', 'placeholder'=>'请输入验证码', "style"=>'width:150px;float:left;margin:0 0 10px 0')) ?>

     <?php $this->widget('CCaptcha', array('showRefreshButton'=>false, 'clickableImage'=>true, 'imageOptions'=>array('alt'=>'点击换图', 'title'=>'点击换图', 'style'=>'cursor:pointer;float:right;'))) ?>
     
    <button class="btn btn-lg btn-primary btn-block" type="submit" id="signinSubmit">登录</button>
  <?php $this->endWidget() ?>
  <div class="footer">
    <p><a href="/Home/index.html" data-toggle="tooltip" data-placement="left" title="不知道自己在哪?">回到异清轩博客 →</a></p>

    <p><?php echo $form->error($loginForm, 'username')?></p>
    <p><?php echo $form->error($loginForm, 'password')?></p>
    <p><?php echo $form->error($loginForm, 'captcha')?></p>
  </div>
</div>
<script src="<?php echo yii::app()->request->baseUrl ?>/assets/admin/js/bootstrap.min.js"></script> 
<script>
$('[data-toggle="tooltip"]').tooltip();
window.oncontextmenu = function(){
	//return false;
};
$('.siteIcon img').click(function(){
	window.location.reload();
});
$('#signinSubmit').click(function(){
	if($('#userName').val() === ''){
		$(this).text('用户名不能为空');
	}else if($('#userPwd').val() === ''){
		$(this).text('密码不能为空');
	}else{
		$(this).text('请稍后...');
	}
});
</script>
</body>
</html>
