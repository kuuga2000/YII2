<?php
class ExtensionwidController extends Controller{
	
	public $layout='null';
	
	public function actionDropdownmenu(){
		$this->render('dropdownmenu');
	}
	
	public function actionJwplayer(){
		$this->render('jwplayer');
	}
}
?>