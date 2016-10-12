<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
		$this->renderPartial('index');
	}

	public function actionMain(){
		$this->render("main");
		
	}
}