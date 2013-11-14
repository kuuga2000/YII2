<?php
/*
 * Author : Sharive
 * BAB 3 : TRIK JITU Yiiframework
 * SUBBAB 3.1 Widget dan Render partial
 */
class WidrenpartController extends Controller{
	 
	//set layout menjadi null sehingga akan tampil putih
	public $layout='null';
	
	//action tab
	public function actionTab(){
		//render file view protected/views/widrenpart/tab.php
		$this->render('tab');
	}
	
	//action accordion
	public function actionAccordion(){
		$this->render('accordion');
	}
	
}
?>