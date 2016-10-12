<?php

class UserController extends Controller{
    
    /**
    *修改密码
    ***/
    public function actionPass(){
         $userModel = User::model();
         if(isset($_POST['User'])){
         	 $userInfo = $userModel->find('username=:name',array(':name'=>yii::app()->user));
             $userModel->attributes = $_POST['User'];//压入
             if($userModel->validate()){
                 $password = md5($_POST['User']['password1']);
                 if($userModel->updateByPk($userInfo->uid, array('password'=>$password))){
                 	   echo "修改成功";
                 }
             }
         }
    }

}





