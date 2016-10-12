<?php

class IndexController extends Controller{

	  public function actionIndex(){
             
             //echo yii::app()->request->baseUrl;die;
             return $this->render("index");

	  }
}






