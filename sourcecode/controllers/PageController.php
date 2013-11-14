<?php
class PageController extends Controller{
	
	public $layout = 'homepage';
	
	public function actionIndex(){
		$this->render('index');
	}
	
	public function actionContact($id=null){
		echo $id;
		//echo $ida.'-'.$s;exit;
		//echo CHttpRequest::getQuery($ida,$defaultValue=null);exit;
		//echo $_GET['ida'];exit;
		$this->render('contact');
	}
	
	public function actionAbout(){
		
		$this->render('about');
	}
	
}
?>