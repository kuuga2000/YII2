<?php
$data[]='"ab"';
$data[]='"ab1"';
$data[]='"ab2"';
//print_r ($data);
$r= implode(',',$data);
$this->widget('zii.widgets.jui.CJuiAutoComplete',array(
    'name'=>'city',
    'source'=>array($r),
    //'source'=>array('sdd'),
    
    //'source'=>array($data[]),
    // additional javascript options for the autocomplete plugin
    'options'=>array(
        'minLength'=>'2',
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;',
    ),
));
?>