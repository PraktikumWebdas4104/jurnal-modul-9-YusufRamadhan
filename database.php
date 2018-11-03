<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "jurnal9"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname, $this->pass, $this->db); //buatlah koneksi secara OOP
	}

	function tampil_data(){
		//lengkapilah method tampil data
		//query select user
		$this->data = mysqli_query($this->conn, "SELECT * FROM user");
		while($d = mysqli_fetch_array($this->data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia){
		//buatlah method input
		//query inset into user
		$this->insert = mysqli_query($this->conn, "INSERT INTO user(Nama, Alamat, Usia) VALUES('$nama', '$alamat', '$usia')");
	}

	function hapus($id){
		//buatlah method hapus
		//query delete from id where id ='$id'
		mysqli_query($this->conn, "DELETE FROM user where ID = $id");
	}

	function edit($id){
		//lengkapilah method edit
		//query select from user where id ='$id'
		$data = mysqli_query($this->conn, "SELECT * FROM user where ID = $id");
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id,$nama,$alamat,$usia){
		//buatlah method update
		//query update user set blablabla where id='$id'
		$update = mysqli_query($this->conn, "UPDATE user SET ID = $id, Nama = '$nama', Alamat = '$alamat', Usia = '$usia'");
	}

} 
	$db = new database();
?>