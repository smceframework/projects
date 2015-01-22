<?php
//ActiveRecord example

use Smce\Core\SmActiveRecord;

class ListModel extends SmActiveRecord
{
	
	public static $table_name="list";
	
	public static $connection="db1";
	
	public function rules()
	{
		return array(
			// name, password and email are required
            array('name, email', 'required'),
			
		);
	}

	public function attributeLabels()
	{
		return array(
			'name'=>'Ad Soyad',
			'email'=>'E-mail',
		);
	}
	
	
	public static function getModel($className=__CLASS__)
	{
		return $className;
	}
    
    public static function getConnection()
	{
		return self::$connection;
	}
    
    public static function getTable()
	{
		return self::$table_name;
	}
	
}
