<?php
$this->widget('zii.widgets.jui.CJuiAccordion',array(
    'panels'=>array(
        'AC 1'=>'ini adalah isi accordion 1',
        'AC 2'=>'accordion 2 besert isinya',
        'AC 3'=>$this->renderPartial('_accordionRender',array('data'=>'isi data render acc render'),TRUE),
    ),
    // additional javascript options for the accordion plugin
    'options'=>array(
        'animated'=>'slide',
    ),
));
?>