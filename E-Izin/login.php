 <!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
</head>
<style>

body{
	font-family: sans-serif;
	background: #d5f0f3;
}
 
h1{
	text-align: center;
	/*ketebalan font*/
	font-weight: 300;
}
 
.tulisan_login{
	text-align: center;
	font-family: robot;
	font-size: 20px;
	text-transform: uppercase;
}
 
.kotak_login{
	width: 350px;
	background: white;
	margin: 80px auto;
	padding: 30px 20px;
}
 
label{
	font-size: 11pt;
}
 
.form_login{
	box-sizing : border-box;
	width: 100%;
	padding: 10px;
	font-size: 11pt;
	margin-bottom: 20px;
}
 
.tombol_login{
	background: #46de4b;
	color: white;
	font-size: 11pt;
	width: 100%;
	border: none;
	border-radius: 3px;
	padding: 10px 20px;
}
 
.link{
	color: #232323;
	text-decoration: none;
	font-size: 10pt;
}







</style>


<body>
 
	
 
	<div class="kotak_login">
		<p class="tulisan_login">Silahkan login</p>
 
		<center><form action="login_proses.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username ..">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password ..">
 
			<input type="submit" class="tombol_login" value="LOGIN"></center>
			
		
		</form>
		
	</div>
 
 
</body>
</html>
  
  
    
	