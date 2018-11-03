<?php 
include 'database.php';
$db = (new database()); //isi dengan deklarasi method
?>
<h1>CRUD OOP PHP</h1>
<h3>Data User</h3>

<a href="input.php">Input Data</a>
<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Usia</th>
		<th>Opsi</th>
	</tr>
	<?php
	$no = 1;
	foreach($db->tampil_data() as $x){ //panggil method tampil data dari class database
	?>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['Nama']; ?></td>
		<td><?php echo $x['Alamat']; ?></td>
		<td><?php echo $x['Usia']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['ID']; ?>&aksi=edit">Edit</a>
			<a href="proses.php?id=<?php echo $x['ID']; ?>&aksi=hapus">Hapus</a>			
		</td>
	</tr>
	<?php 
	}
	?>
</table>



