<?php
	include 'koneksi.php';
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$data = mysqli_query ($koneksi, "select * from data where id = '$id'");
		$item = mysqli_fetch_assoc ($data);
	}
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
	<input type="text" class="form-control flat" name="nama" maxlength="99" placeholder="Nama" required title="Nama harus berisi character" value="<?= $item['nama'] ?>"><br>
	<label>Nim</label><br>
	<input type="text" class="form-control flat" name="nim" maxlength="12" placeholder="Nim" required title="Nim berupa angka" value="<?= $item['nim'] ?>"><br>
	</table>
<button class="btn btn-success flat" type="submit" name="create">Update</button>
</form>
<?php
	if(isset($_POST['create'])){
		$nama = $_POST ['nama'];
		$nim = $_POST ['nim'];
		$sql = mysqli_query ($koneksi,"update data set nama = '$nama', nim = '$nim' where id = '$id'");
		header('location:index.php');
	}
?>

</body>
</html>