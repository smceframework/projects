<?php

/**
 *
 * @author Samed Ceylan
 * @link http://www.samedceylan.com/
 * @copyright 2015 SmceFramework
 * @github https://github.com/imadige/SMCEframework-MVC
 */
 
namespace Smce\Core;

class SmFormModel extends SmModel
{
	
	/**
	 *
	 * @param $attribute
	 *
	 */
	 
	public function attributesApply($attributes)
	{
		foreach($attributes as $key=>$value)
			$this->$key=$value;
	}
	
}
