<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2 style="padding-top: 15px;">Вход</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>E-mail</label>
     	<input type="text" name="uname" placeholder="Введите email"><br>

     	<label>Пароль</label>
     	<input type="password" name="password" placeholder="Введите пароль"><br>

		 <a href="#" style="margin-left: 60%; ">Забыли пароль?</a> <br>
     	<button type="submit">Войти</button><br>
		<p style="text-align: center; font-family: 'Montserrat';">Войти с помощью</p><br>
        <div class="icons_apps">
            <div class="st_icon"><a href="#"><img src="img/App logo 93.png" ></a> </div>
            <div class="st_icon"><a href="#"><img src="img/App logo 94.png" alt=""></a></div>
            <div class="st_icon"><a href="#"><img src="img/App logo 95.png" alt=""></a></div>

        </div><br>
        <a href="signup.php" style="text-align: center; text-decoration: none">Нет аккаунта? <span style="text-decoration: underline; color: blue;">Зарегистрироваться</span></a>
     </form>
</body>
</html>