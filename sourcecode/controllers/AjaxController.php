<?php
/*Author Kuuga M. Sharive
 *latihan bab 4 :
 *Cara cerdas menggunakan Ajax CRUD di Yiiframework
 */
class AjaxController extends Controller {

	public function actionCreate() {
		//jika di request oleh ajax maka jalankan
		if (Yii::app() -> request -> isAjaxRequest) {
			$modelPegawai = new Pegawai;
			if ($_POST) {
				$modelPegawai['nama'] = $_POST['nama'];
				$modelPegawai['alamat'] = $_POST['alamat'];
				$modelPegawai['telp'] = $_POST['notelp'];
				$modelPegawai -> save();
			}
			$this -> render('create', array("model" => $modelPegawai));
		}
	}

	public function actionDelete($id) {
		//jika di request oleh ajax maka jalankan
		if (Yii::app() -> request -> isAjaxRequest) {
			Pegawai::model() -> deleteByPk($id);
		}

	}

	public function actionUpdate($id) {
		//jika di request oleh ajax maka jalankan
		if (Yii::app() -> request -> isAjaxRequest) {
			$dataPegawai = Pegawai::model() -> findByPk($id);
			if ($_POST) {
				$dataPegawai -> nama = $_POST['nama'];
				$dataPegawai -> alamat = $_POST['alamat'];
				$dataPegawai -> telp = $_POST['notelp'];
				$dataPegawai -> save();
			}
			$this -> render('update', array('dataPegawai' => $dataPegawai));
		}
	}

	public function actionIndex() {
		$this -> render('index');
	}

	public function actionIndexpegawai() {
		//$this->layout='main';
		$criteria = new CDbCriteria(array('order'=>'id DESC'));
		$count = Pegawai::model() -> count($criteria);
		$pages = new CPagination($count);
		// results per page
		$pages -> pageSize = 5;
		$pages -> applyLimit($criteria);
		//$criteria -> order = 'id DESC';
		$dataPegawai = Pegawai::model() -> findAll($criteria);
		$this -> render('indexpegawai', 
		     array('dataPegawai' => $dataPegawai,
		     'pages'=>$pages,
	    ));

	}

}
