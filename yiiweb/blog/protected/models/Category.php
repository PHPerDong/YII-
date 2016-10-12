<?php

class Category extends CActiveRecord{

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
    	 return "category";
    }
    
    
    /**
    *设置规则
    *
    */
    public function rules(){
        return array(
            array('name', 'required', 'message'=>'必填'),
           
        );
    }









}


