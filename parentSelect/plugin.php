<?php
class parentSelect extends Plugin {

	public function init()
	{
		$this->dbFields = array(
			'titleshow'=>''
             
		);
	}


	public function adminBodyEnd(){
		include $this->phpPath().'PHP/script.php';
	}


	public function form(){

		include $this->phpPath().'PHP/settings.php';
		
	}

}
