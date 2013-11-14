<?php
class LessonsController extends YiiWebservice {

	public function actionMoney() {
		echo $this -> convertMoneytoIDR(1000000);
	}

	public function actionFx() {
		$xml = new SimpleXMLElement('<xml/>');
		for ($i = 1; $i <= 8; ++$i) {
			$track = $xml -> addChild('track');
			$track -> addChild('path', "song$i.mp3");
			$track -> addChild('title', "Track $i - Track Title");
		}

		
		print($xml -> asXML());
	}
	
	public function actionTest(){
		echo count($this->xml);
	}

}
