<?php
	include"koneksi.php";

	function antiinjection($data){
		$filter_sql=mysql_real_escape_string(stripcslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter_sql;
		//script untuk memvalidasi
	}

	$acak ="bduigGF";
	$username = $_POST['user_name'];
	$password = md5($acak.md5($_POST['pass']).$acak); //deskripsi kode acak
	$status = $_POST['sts'];

	if(!ctype_alnum($username) OR !ctype_alnum($password)){
		echo"<meta http-equiv='refresh' content='0; url=index.php'>";
	}else{
		$login=mysql_query("SELECT * FROM login WHERE user='$username' AND password='$password'");
		$ketemu = mysql_num_rows($login);
		$r=mysql_fetch_array($login);

		if($ketemu > 0){
			header('location: index_employer.php');
		}else{
			echo"<center><br><br><b>LOGIN GAGAL COY</b><br>
			User Name yang anda inputkan salah<br>
			atau<br>
			Password yang anda inputkan juga salah<br>";
			echo"<meta http-equiv='refresh' content='0; url=index.php'>";
		}
	}
?>