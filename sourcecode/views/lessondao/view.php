<table>
    <tr>
        <td>#ID</td>
        <td>:</td>
        <td><?php echo $pegawai['id'];?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $pegawai['nama'];?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $pegawai['alamat'];?></td>
    </tr>
    <tr>
        <td>No. Telp</td>
        <td>:</td>
        <td><?php echo $pegawai['telp'];?></td>
    </tr>
    <tr>
        <td>
            <a href="<?php echo $this->createUrl('indexpegawai');?>">Kembali ke index</a>
        </td>
    </tr>
</table>