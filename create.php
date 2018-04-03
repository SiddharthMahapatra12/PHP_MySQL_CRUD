<?php include "template/header.php"; ?>

<h2>Add a member</h2>

<form method="POST" action="form1.php">
	<label for="id">Member ID</label>
	<input type="text" name="id" id="id">
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<label for="email">Email Address</label>
	<input type="text" name="email" id="email">

	<input type="submit" name="submit" value="Submit">
</form>

<br>

<a href="index.php">Back to Home</a>

<?php include "template/footer.php"; ?>
