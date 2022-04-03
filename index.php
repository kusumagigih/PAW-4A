<?php
	include 'koneksi.php'
?>
<!DOCTYPE html>
<html>
<head>
<title>Ini Web Mahasiswa</title>
<style>
table {
  font-family: times new roman, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 10px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h1>Ini Table Mahasiswa</h1>

<form method="POST">
	<label>Nama</label><br>
	<input type="text" class="form-control flat" name="nama" maxlength="99" placeholder="Nama" required title="Nama harus berisi character"><br>
	<label>Nim</label><br>
	<input type="text" class="form-control flat" name="nim" maxlength="12" placeholder="Nim" required title="Nim berupa angka"><br>
	</table>
<button class="btn btn-success flat" type="submit" name="create">Create</button>
</form>
<table>
	<tr>
    <th>Nama</th>
    <th>Nim</th>
    <th colspan = "2">Aksi</th>
  </tr>
  
  	<?php
  	$data = mysqli_query ($koneksi, "select * from data");
  	while ($item = mysqli_fetch_assoc($data)){
  	?>
  	<tr>
    <td><?= $item['nama'] ?></td>
    <td><?= $item['nim'] ?></td>
    <td><a href="edit.php?id=<?= $item['id'] ?>">Edit</a></td>
    <td><a href="delete.php?id=<?= $item['id'] ?>">Delete</a></td>
    </tr>
    <?php }
    ?>
</table>
<?php
	if(isset($_POST['create'])){
		$nama = $_POST ['nama'];
		$nim = $_POST ['nim'];
		$sql = mysqli_query ($koneksi,"insert into data (nama,nim) values ('$nama','$nim')");
		header ('location:index.php');
	}
?>

</body>
</html>