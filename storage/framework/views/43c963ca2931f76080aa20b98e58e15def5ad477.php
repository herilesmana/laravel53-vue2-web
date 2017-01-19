<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create New User</title>
</head>
<body>
	<form action="/users" method="POST">
		<?php echo csrf_field(); ?>

		<label for="name">Name : </label>
		<input name="name" id="name" type="text">

		<label for="email">Email : </label>
		<input name="email" id="email" type="text">

		<label for="password">Password : </label>
		<input name="password" id="password" type="text">

		<input type="submit" value="Create">
	</form>
</body>
</html>