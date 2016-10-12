<?php

class LoginController extends Controller{

	public function actionLogin(){
		 //var_dump(yii::app()->db);
		 $user = User::model()->find('username=:name', array(':name'=>'admin'));
		 //var_dump($user->password);
		 $loginForm = new loginForm();
		 if(isset($_POST['LoginForm'])){
		 	 $loginForm->attributes = $_POST['LoginForm'];
		 	 //验证验证码是否对错
		 	 if($loginForm->validate() && $loginForm->login()){
                  //echo yii::app()->user->name;die;

		 	 	  //session存取
		 	 	  //yii::session['adminUser'] = time();
		 	 	  //跳转方法
		 	 	  //$this->redirect(array("控制器/方法"))
		 	 	  $this->redirect(array("default/main"));

		 	 }
		 }
         $this->render("login",array('loginForm'=>$loginForm));
	}

    /**
    *后台退出
    */
	public function actionLogOut(){
          yii::app()->user->logout();
          $this->redirect(array("login/login"));
	}


    /**
    *
    *验证码调取
    **/
	public function actions(){
        
         return array(
             'captcha' => array(
                 'class' => 'system.web.widgets.captcha.CCaptchaAction',
                 'height'=> 44,
                 'width' => 100,
                 'minLength' => 4,
                 'maxLength' => 4 
             )
         );

	}

}