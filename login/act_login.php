<?php
session_start();
$user=$_POST["user"];
$pass=$_POST["pass"];
	if($user=="sha"&&$pass="sha"){
		?>
		<script type="text/javascript">
		alert('Hay Guys!.');
		document.location='login.php';
		</script>
		<?php
		}
	else{
		echo "
		<script>
			alert('Sorry, Login Anda Salah');
			document.location='login.php';
		</script>
		";
	}
?>