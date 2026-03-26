<link rel="stylesheet" href="../styles/styles.css">
<h2>Регистрация нового пользователя</h2>
<pre><?= $message ?? ''; ?></pre>
<form method="post">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <label>Имя <input type="text" name="name"></label>
    <label>Логин <input type="text" name="login"></label>
    <label>Пароль <input type="password" name="password"></label>
    <label>Фамилия <input type="text" name="first_name"></label>
    <label>Отчество<input type="text" name="last_name"></label>
    <button>Зарегистрироваться</button>
</form>