<?php

use Smce\Core\SmController;

class RouterController extends SmController
{
	
    public $layout='//layouts/column2';
	
	
	public function actionIndex(){
		echo "<pre>";
		print_r($_GET);
		
	}
}