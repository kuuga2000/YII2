<h5>Create data pegawai</h5>

<form action="" method="post" id="myForm">
	 
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" />
				  
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" cols="50" rows="3"></textarea></td>
		</tr>
		<tr>
			<td>No. telepon</td>
			<td>:</td>
			<td><input type="text" name="notelp" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input id="create" type="button" value="Create" /></td>
		</tr>
	</table>
</form>
<script>
$(document).ready(function(){
	//$("#form").load('<?php echo Yii::app()->request->baseUrl;?>/ajax/create');
	
	$('#create').click(function(){
		$('#create').attr({
			value : 'loading..',
			disabled : true,
		});
		var myFormData = $("#myForm").serialize();
		$.ajax({
			type:'POST',
			url : '<?php echo Yii::app()->request->baseUrl;?>/ajax/create',
			data:myFormData,
			success:function(data){
				 
				 	
				 
					$('#data').load('<?php echo Yii::app()->request->baseUrl;?>/ajax/indexpegawai');
					$('#create').attr({
						value : 'Create',
						disabled : false,
					});
					//$('#myForm')[0].reset();
				 
			}
			
		});
		return false;
	});
	
	
});
	
</script>
