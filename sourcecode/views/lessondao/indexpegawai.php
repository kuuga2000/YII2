<a href="<?php echo $this->createUrl('add');?>">Tambah pegawai</a>
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>No. Telp</th>
        <th>&nbsp;</th>
    </tr>
    <?php foreach ($dataProvider as $pegawai):?>
    <tr>
        <td><?php echo $pegawai['nama'];?></td>
        <td><?php echo $pegawai['alamat'];?></td>
        <td><?php echo $pegawai['telp'];?></td>
        <td><a href="<?php echo $this->createUrl('view',array('id'=>$pegawai['id']));?>">View</a> | 
            <a href="<?php echo $this->createUrl('delete',array('id'=>$pegawai['id']));?>">Delete</a> | 
            <a href="<?php echo $this->createUrl('update',array('id'=>$pegawai['id']));?>">Update</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>