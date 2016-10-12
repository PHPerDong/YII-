<?php

class Article extends CActiveRecord{

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
    	 return "article";
    }
    
    
    /**
    *设置规则,不设置规则接受不到数据，必须设置
    *
    */
    public function rules(){
        return array(
            array('title', 'required', 'message'=>'必填'),
            array('content,describe', 'safe'),
            array('keywords', 'required', 'message'=>'必填'),
            array('pid', 'required', 'message'=>'必填'),
            array('tags', 'required', 'message'=>'必填'),
            array('titlepic', 'required', 'message'=>'必填'),
        );
    }









}


