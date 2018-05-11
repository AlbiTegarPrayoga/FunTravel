<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Update</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
</head>
<body>
	<?php foreach($isi->result() as $key): ?>
		<form action="http://localhost/gabung/ciadminlte/index.php/user/gantikan/<?php echo $key->id ?>" method="post"
		>
			<input type="text" name="username" placeholder="<?php echo $key->Username ?>">
			<input type="text" name="password" placeholder="<?php echo $key->Password ?>">
			<input type="text" name="fullname" placeholder="<?php echo $key->Fullname?>">
			<input type="text" name="level" placeholder="<?php echo $key->Level ?>">
		</form>

		<?php endforeach?>

</body>
</html>