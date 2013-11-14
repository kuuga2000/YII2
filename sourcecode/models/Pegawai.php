<?php
class Pegawai extends CActiveRecord {

	public static function model($className = __CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'pegawai';
	}

	public function rules() {
		return array( 
			array('nama ,alamat, telp', 'required',
					'message'=>'silahkan perbaiki error {attribute}'
			),
			array('telp','numerical','integerOnly'=>true,'message'=>'harus berupa angka {attribute}'),
		);
	}

	public function attributeLabels() {

		return array('nama' => 'Nama', 'alamat'=>'Alamat','telp'=>'No. telp');

	}

}
