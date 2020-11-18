<?php
	include 'koneksi.php';
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$md_pass=md5($pass);
	
	$sqlAdmin=mysqli_query($mysqli,"select * from admin where username='$user' and password='$md_pass'");
	$row=mysqli_fetch_array($sqlAdmin);
	$count=mysqli_num_rows($sqlAdmin);
		
	if($count==0)
		echo "Username atau password salah";
	else if($row[3]=='ADM'){
	echo	$_SESSION['username']=$row[1];
		$_SESSION['password']=$row[2];
		//session_register(administrator);
		$id=1;
		// header("location:index.php?pg=profile&admin=$row[0]");
	} else if($row[3]=='ANG'){
		$_SESSION['username']=$row[1];
		$_SESSION['password']=$row[2];
		//session_register(member);
		$id=2;
		header("location:index.php?pg=profile&admin=$row[0]");
	}
	ob_end_flush();
	
?>
