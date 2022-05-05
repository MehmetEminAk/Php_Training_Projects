<!doctype html>
<html>
<head>
<!-- Enable users to add your web application or webpage link to the Home screen. Replace icon.png with your icon file path -->
<link rel="apple-touch-icon" href="icon.png">
<!-- Specify a launch screen image that is displayed while your web application launches. Replace app.png with your image file path -->
<link rel="apple-touch-startup-image" href="app.png">
<!-- Mobile Internet Explorer allows us to activate ClearType technology for smoothing fonts for easy reading -->
<meta http-equiv="cleartype" content="on">
<!-- Specify whether or not telephone numbers in the HTML content should appear as hypertext links -->
<meta name="format-detection" content="telephone=no" />
<!-- Changes the logical window size used when displaying a page mobile browsers -->
<meta name = "viewport" content = "width = device-width, initial-scale=1, user-scalable=yes">
	<style>
		
	</style>
<meta charset="utf-8">
<title>Dreamvewaer Denemesi</title>
</head>
<body>
	<?php
		if(!isset($_POST["arananUrun"])){
		echo '		<center>
						<form action="akticaret.php"  method="post">
						<table>
								<tr>
									<td width="400px">
										<input width="100%" type="text" name="arananUrun" placeholder="Ne aramıştınız"></input>
									</td> 
									<td width="100px">
										<button width="100%" type="submit">Arama Yap</button>
									</td>
								</tr>
							</table>
						</form>
					</center>';
		}
		else{
			$aranmısUrun=$_POST["arananUrun"];
			@header("refresh:0;url=urunler.php?urun=$aranmısUrun");
		}
		



	?>
	

</body>
</html>