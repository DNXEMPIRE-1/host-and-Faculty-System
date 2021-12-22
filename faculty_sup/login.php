<?php 
include('sample/config.php');
include_once 'function.php';

sec_session_start();

if (login_check($mysqli) == true) {
$logged = 'in';
} else {
$logged = 'out';
}
?>

<form action="process_login.php" method="post" name="login_form">
<label for="email">Email</label><br>
<input type="text" class="username" id="email" name="email" required>
<label for="password">Password</label><br>
<input type="password" class="password" id="password" name="password" required>
<button type="submit" class="submit" onClick="formhash(this.form, this.form.password);">Sign in</button>
</form>