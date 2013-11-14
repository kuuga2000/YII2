<div id="form"></div>


<div id="data"></div>

<?php 
Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/assets/js/jquery-1.10.2.min.js',CClientScript::POS_BEGIN);
?>
<script>
$(document).ready(function(){
	$("#form").load('<?php echo Yii::app()->request->baseUrl;?>/ajax/create');
	$('#data').load('<?php echo Yii::app()->request->baseUrl;?>/ajax/indexpegawai');
});
</script>