<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
 <html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en"lang="en">
<head><title>SK 1</title></head>
	<body>
		<?php

			$time=date("H");

			if($time<=11)
			{
			echo 'Selamat Pagi Boss';
			}
			elseif($time>=11&&$time<=15)
			{
			echo 'Selamat Siang Boss';
			}
			elseif($time>=15&&$time<=19)
			{
			echo 'Selamat Sore Boss';
			}
			elseif($time>=19&&$time<=24)
			{
			echo 'Selamat Malam Boss';
			}
			else{
			echo 'Waktu tidak terdeteksi';
			}
		?>
	</body>
</html>