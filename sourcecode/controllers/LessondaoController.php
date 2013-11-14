<?php

class LessondaoController extends YiinigoController {

    public $layout = 'null';

    public function actionIndexpegawai() {
        /* buat sql untuk select semua data pegawai */
        $sql = "SELECT * FROM pegawai ORDER BY id ASC";
        /* digunakan untuk mengkoneksikan ke databse */
        $conncection = Yii::app()->db;
        /* membuat command/query */
        $command = $conncection->createCommand($sql);
        //$results = $command->queryRow();
        /* membaca query dan akan dapat di tampilkan semua datanya */
        $results = $command->queryAll();
        /* render ke file view nya indexpegawai.php */
        $this->render('indexpegawai', array(
            'dataProvider' => $results)
        );
        //echo $results['s'];
        //foreach ($results as $data):
        //echo $results['nama']; // . " - ". $data['alamat']." ".$data['telp'];
        //endforeach;
    }

    //action untuk view data
    public function actionView($id) {

        $sql = "SELECT * FROM pegawai WHERE id='$id'";

        $connection = Yii::app()->db;

        $command = $connection->createCommand($sql);

        $results = $command->queryRow();

        $this->render('view', array(
            'pegawai' => $results)
        );
    }

    //action untuk delete data
    public function actionDelete($id) {
        $sql = "DELETE FROM pegawai WHERE id='$id'";
        $connection = Yii::app()->db;
        $command = $connection->createCommand($sql);
        /* eksekusi query atau execute non query */
        $command->execute();
        /* redirect ke indexpegawai */
        $this->redirect(array('indexpegawai'));
    }

    public function actionAdd() {
        if ($_POST) {
        	//ambil data dari masing - masing attributes
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];
			//perintah simpan data
            $sql = "INSERT INTO pegawai(nama,alamat,telp) VALUES('$nama','$alamat','$telp')";
            //$sql = "INSERT INTO pegawai(nama,alamat,telp) VALUES(:nama,:alamat,:telp)";
            $connection = Yii::app()->db;
			//execute query simpan data
            $command = $connection->createCommand($sql);
            //$command->bindParam(":nama",$nama,PDO::PARAM_STR);
            //$command->bindParam(":alamat",$alamat,PDO::PARAM_STR);
            //$command->bindParam(":telp",$telp,PDO::PARAM_STR);

            /* eksekusi query atau execute non query */
            $command->execute();
            $this->redirect(array(
                'indexpegawai')
            );
        }
        $this->render('add');
    }

    public function actionUpdate($id) {
        if ($_POST) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $telp = $_POST['telp'];
            $sql = "UPDATE pegawai SET nama='$nama',alamat='$alamat',telp='$telp' WHERE id='$id'";

            $connection = Yii::app()->db;
            $command = $connection->createCommand($sql);


            /* eksekusi query atau execute non query */
            $command->execute();
            $this->redirect(array(
                'indexpegawai')
            );
        }
        $this->render('update',array(
            'pegawai'=>$results,
        ));
    }

}

/*
 * public function query($sql) {
  $conncection = Yii::app() -> db;


  //return $conncection;
  $command = $conncection -> cache(1000) -> createCommand($sql);
  $results = $command -> queryAll();
  return $results;

  }
 */
?>
