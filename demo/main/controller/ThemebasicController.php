<?php

use Smce\Core\SmController;

class ThemebasicController extends SmController
{

    public $layout='//layouts/column1';
	
    public $theme='basic';

    public function actionIndex()
    {
        $this->render("index");
    }

}
