<table border="1">
	<tr>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No. Telp</th>
		<th>#</th>
	</tr>
	<?php foreach ($dataPegawai as $pegawai) {
	?>
	<tr>
		<td><?php echo $pegawai -> nama;?></td>
		<td><?php echo $pegawai -> alamat;?></td>
		<td><?php echo $pegawai -> telp;?></td>
		<td>
			<a href="#" class="update" id="<?php echo $pegawai->id;?>">Edit</a> ||
			<a href="#" class="delete" id="<?php echo $pegawai->id;?>">Delete</a>
		</td>
	</tr>
	<?php }?>
</table>
<br>
<?php 
// display pagination
$this->widget('CLinkPager', array(
	'header'=>'',
	'maxButtonCount'=>5,
    'pages' => $pages,
)) ?>
<script>
	$(document).ready(function(){
		$('li a').click(function(){
			$('#data').load($(this).attr('href'));
			return false;
		});
		$('.delete').click(function(){
			var id =$(this).attr('id'); 
			$.ajax({
				type:'POST',
				url:'<?php echo Yii::app()->request->baseUrl;?>/ajax/delete/'+id,
				success:function(data){
					$('#data').load('<?php echo Yii::app()->request->baseUrl;?>/ajax/indexpegawai');
				}
			});
			return false;
		});
		//update
		$('.update').click(function(){
			var id =$(this).attr('id'); 
			 $('#form').load('<?php echo Yii::app()->request->baseUrl;?>/ajax/update/'+id);
			return false;
		});
	});
</script>