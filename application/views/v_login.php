<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<style type="text/css">
 
	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }
 
	body {
		background-color: #fff;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}
 
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
 
	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 100px auto;
		width: 310px;		
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>
	
	<div id="container">
		<h1>Silahkan Login Dulu</h1>
 
		<div id="body">		
			<?php echo form_open('login/aksi') ?>
			<table>				
				<tr>
					<td>Username</td><td><input type="text" name="Nama_User"></td>
				</tr>
				<tr>
					<td>Password</td><td><input type="password" name="Password"></td>
				</tr>
				<tr>
					<td></td><td><input type="submit" value="Login"></td>
				</tr>				
			</table>
		</form>
 
	</div>
 
	<p class="footer">Masukkan Nama dan Password</p>
</div>
 
 
</body>
</html>