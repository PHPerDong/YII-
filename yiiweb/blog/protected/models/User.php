<?php

class User extends CActiveRecord{

	//定义数据库没有的变量
	public $password1;
	public $password2;
    
    /*
    * 必不可少的方法，返回模型
    *
    *
    ***/
    public static function model($className = __CLASS__){
         return parent::model($className);
    }


    /*
    *该方法返回表名
    *
    **/
    public function tableName(){
    	 return "admin";
    }


    /**
    *设置标签
    *
    */
    public function attributeLabels(){
    	return array(
            'password' => '原始密码',
            'password1'=> '新密码',
            'password2'=> '确认密码',
    	);

    }
    
    /**
    *设置规则
    *
    */
    public function rules(){
        return array(
            array('password', 'required', 'message'=>'原始密码必填'),
            array('password', 'check_passwd'),
            array('password1', 'required', 'message'=>'新密码必填'),
            array('password2', 'required', 'message'=>'确认密码必填'),
            array('password2', 'compare', 'compareAttribute'=>'password1', 'message'=>'新密码与确认密码不一致'),
        );
    }

    /***
    *自定义方法，与数据库匹配
    *
    **/
    public function check_passwd(){
    	$userInfo = $this->find('username=:name',array(':name'=>yii::app()->user->name));
    	if(md5($this->password != $userInfo->password)){
             $this->addError('password', '原始密码不正确');
    	}
    }

}




