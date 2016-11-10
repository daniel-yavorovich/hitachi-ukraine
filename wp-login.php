<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="ru-RU">
<head>
	<title>Hitachi Ukraine &rsaquo; Войти</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel='stylesheet' id='login-css'  href='http://hitachi-ukraine.org/wp-admin/css/login.css?ver=20100601' type='text/css' media='all' />
<link rel='stylesheet' id='colors-fresh-css'  href='http://hitachi-ukraine.org/wp-admin/css/colors-fresh.css?ver=20100610' type='text/css' media='all' />
<meta name='robots' content='noindex,nofollow' />
</head>
<body class="login">
<div id="login"><h1><a href="http://wordpress.org/" title="Сайт работает на WordPress">Hitachi Ukraine</a></h1>

<form name="loginform" id="loginform" action="http://hitachi-ukraine.org/wp-login.php" method="post">
	<p>
		<label>Логин<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" tabindex="10" /></label>
	</p>
	<p>
		<label>Пароль<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" tabindex="20" /></label>
	</p>
	<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Запомнить меня</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Войти" tabindex="100" />
		<input type="hidden" name="redirect_to" value="http://hitachi-ukraine.org/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
<a href="http://hitachi-ukraine.org/wp-login.php?action=lostpassword" title="Восстановление пароля">Забыли пароль?</a>
</p>
</div>
<p id="backtoblog"><a href="http://hitachi-ukraine.org/" title="Потерялись?">&larr; Назад к сайту &laquo;Hitachi Ukraine&raquo;</a></p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.value = '';
d.focus();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>
</body>
</html>
