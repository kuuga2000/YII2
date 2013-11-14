<?php

class LessoncomponentController extends YiinigoController {

    public function actionMoney() {
        /*
         * panggil function idrCurency 
         * oleh karena sudah di extends YiinigoController
         * maka pemanggilannya cukup menggunakan $this->...
         */
        echo $this->idrCurency(7500000);
    }

    //format tanggal
    public function actionDate() {
        //deklarasi tanggal
        $date = date('Y-m-d');
        /* memanggil component Mycomponent
          function formatDate */
        echo Mycomponent::formatDate($date);
    }

    //format jam
    public function actionWhattime() {
        //memanggil componen Mycomponent
        $callTime = new Mycomponent;
        $time = '14:34:00';
        /* tampilkan jam dengan format yang 
          telah ditentukan */
        echo $callTime->formatTime($time);
    }

}

?>
