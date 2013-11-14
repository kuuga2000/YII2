<?php
$this->widget('zii.widgets.jui.CJuiTabs',array(
    'tabs'=>array(
        'TAB 1'=>'Ini adalah tab dengan data statis',
        'TAB 2'=>'Ini adalah tab dengan data statis juga',
        'Render Partial'=>$this->renderPartial('_tabRender',array('data'=>'isi data'),TRUE),        
       //'TAB 3'=>array('content'=>$this->renderPartial('_dataRender'),TRUE),
       //panel 3 contains the content rendered by a partial view
       //'AjaxTab'=>array('ajax'=>$ajaxUrl),
    ),
    // additional javascript options for the tabs plugin
    'options'=>array(
        'collapsible'=>true,
    ),
));
?>