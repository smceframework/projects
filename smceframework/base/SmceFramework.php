<?PHP 




class SmceFramework {
	
	
	public function createWebApplication($config){
		extract(@$config);
		require(SMCE_BASE_PATH."/lib/SMAutoload.php");
		require(SMCE_BASE_PATH."/base/Smbase.php");
		$Smbase=new \SMBase\Smbase;
		
		\SMBase\Smbase::$config=$config;
		return $Smbase;
	}
}