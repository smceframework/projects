<?php

use Smce\Core\SmController;


class SiteController extends SmController
{

    public $layout='//layouts/column1';

    public function actionIndex()
    {
		$this->render("index");
        
    }
	

    public function actionAbout()
    {
         $this->render("pages/about");
    }
	
	
	public static function methotTest(){
		return "This method was called from SiteController";
	}

	
    public function actionLogin()
    {
		
        $model=new LoginForm();

        if (isset($_POST["LoginForm"])) {
            $post=(object) $_POST["LoginForm"];

            $model->username    =    $post->username;
            $model->password    =    $post->password;
			if(isset($post->rememberMe))
            	$model->rememberMe    =  $post->rememberMe;
			
            if ($model->validate() && $model->login()) {
			
                //redirect url
                $this->redirect("panel/index");

            }
        }

        $this->render("login",array(
            "model"=>$model,
         ));

    }

    public function actionLogout()
    {
        Smce::app()->stateClear();
        $this->redirect("site/index");
    }

    public function error($err)
    {
         $this->render("error",array(
            "code"=>$err,
         ));
    }
}
