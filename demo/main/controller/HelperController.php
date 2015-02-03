<?php

use Smce\Core\SmController;
use Smce\Core\SmHelper as s;

class HelperController extends SmController
{

    public $layout='//layouts/column2';


    public function actionArrayfirst()
	{
		$array=array(100, 200, 120, 336, 680, 247, 300, 185, 90, 125, 140);

		echo s::array_first(function($x){
			return $x > 200;
		},$array);

	}
	
	public function actionArraylast()
	{
		$array=array(100, 200, 120, 336, 680, 247, 300, 185, 90, 125, 140);

		echo s::array_last(function($x){
			return $x > 200;
		},$array);

	}
	
	
	public function actionArraysort()
	{
		$array = array(
			array('name' => 'Foo'),
			array('name' => 'Soo'),
			array('name' => 'Coo'),
		);
		
		$arr=s::array_sort(function($value)
		{
			return $value['name'];
		},$array);

		echo "<pre>";
		print_r($arr);
		
	}
	
	
	
}