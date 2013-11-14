 
<h5>Update data pegawai</h5>

<form action="" method="post" id="myForm">
	<input type="hidden" id="id" value="<?php echo $dataPegawai->id;?>" />
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $dataPegawai->nama;?>" name="nama" />
				  
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" cols="50" rows="3"><?php echo $dataPegawai->alamat;?></textarea></td>
		</tr>
		<tr>
			<td>No. telepon</td>
			<td>:</td>
			<td><input type="text" value="<?php echo $dataPegawai->telp;?>" name="notelp" /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input id="save" type="submit" value="Create" /></td>
		</tr>
	</table>
</form>
 
 
<script>
$(document).ready(function(){
	//$("#form").load('<?php echo Yii::app()->request->baseUrl;?>/ajax/create');
	
	$('#save').click(function(){
		var id = $('#id').val();
		$('#save').attr({
			value : 'loading..',
			disabled : true,
		});
		var myFormData = $("#myForm").serialize();
		$.ajax({
			type:'POST',
			url : '<?php echo Yii::app()->request->baseUrl;?>/ajax/update/'+id,
			data:myFormData,
			success:function(data){
				 
				 	
				 
					$('#data').load('<?php echo Yii::app()->request->baseUrl;?>/ajax/indexpegawai');
					$('#save').attr({
						value : 'Update',
						disabled : false,
					});
					$('#myForm')[0].reset();
				 
			}
			
		});
		return false;
	});
	
	
});
	
</script> 
